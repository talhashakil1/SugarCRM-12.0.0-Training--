<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Validator;

use Laminas\Validator\Callback;
use Laminas\Validator\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

/**
 * @group      Laminas_Validator
 */
class CallbackTest extends TestCase
{
    /**
     * Ensures that the validator follows expected behavior
     *
     * @return void
     */
    public function testBasic()
    {
        $valid = new Callback([$this, 'objectCallback']);
        $this->assertTrue($valid->isValid('test'));
    }

    public function testStaticCallback()
    {
        $valid = new Callback(
            [CallbackTest::class, 'staticCallback']
        );
        $this->assertTrue($valid->isValid('test'));
    }

    public function testSettingDefaultOptionsAfterwards()
    {
        $valid = new Callback([$this, 'objectCallback']);
        $valid->setCallbackOptions('options');
        $this->assertEquals(['options'], $valid->getCallbackOptions());
        $this->assertTrue($valid->isValid('test'));
    }

    public function testSettingDefaultOptions()
    {
        $valid = new Callback(['callback' => [$this, 'objectCallback'], 'callbackOptions' => 'options']);
        $this->assertEquals(['options'], $valid->getCallbackOptions());
        $this->assertTrue($valid->isValid('test'));
    }

    public function testGettingCallback()
    {
        $valid = new Callback([$this, 'objectCallback']);
        $this->assertEquals([$this, 'objectCallback'], $valid->getCallback());
    }

    public function testInvalidCallback()
    {
        $valid = new Callback([$this, 'objectCallback']);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid callback given');
        $valid->setCallback('invalidcallback');
    }

    public function testAddingValueOptions()
    {
        $valid = new Callback(['callback' => [$this, 'optionsCallback'], 'callbackOptions' => 'options']);
        $this->assertEquals(['options'], $valid->getCallbackOptions());
        $this->assertTrue($valid->isValid('test', 'something'));
    }

    public function testEqualsMessageTemplates()
    {
        $validator = new Callback([$this, 'objectCallback']);
        $this->assertAttributeEquals(
            $validator->getOption('messageTemplates'),
            'messageTemplates',
            $validator
        );
    }

    public function testCanAcceptContextWithoutOptions()
    {
        $value     = 'bar';
        $context   = ['foo' => 'bar', 'bar' => 'baz'];
        $validator = new Callback(function ($v, $c) use ($value, $context) {
            return ($value == $v) && ($context == $c);
        });
        $this->assertTrue($validator->isValid($value, $context));
    }

    public function testCanAcceptContextWithOptions()
    {
        $value     = 'bar';
        $context   = ['foo' => 'bar', 'bar' => 'baz'];
        $options   = ['baz' => 'bat'];
        $validator = new Callback(function ($v, $c, $baz) use ($value, $context, $options) {
            return ($value == $v) && ($context == $c) && ($options['baz'] == $baz);
        });
        $validator->setCallbackOptions($options);
        $this->assertTrue($validator->isValid($value, $context));
    }

    public function objectCallback($value)
    {
        return true;
    }

    public static function staticCallback($value)
    {
        return true;
    }

    public function optionsCallback($value)
    {
        $args = func_get_args();
        $this->assertContains('something', $args);
        return $args;
    }

    public function testIsValidRaisesExceptionWhenNoCallbackPresent()
    {
        $validator = new Callback();

        $r = new ReflectionProperty($validator, 'options');
        $r->setAccessible(true);

        $options = $r->getValue($validator);
        $options['callback'] = [];

        $r->setValue($validator, $options);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No callback given');
        $validator->isValid('test');
    }
}
