<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Validator;

use Laminas\Validator\GreaterThan;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Validator
 */
class GreaterThanTest extends TestCase
{
    /**
     * Ensures that the validator follows expected behavior
     *
     * @return void
     */
    public function testBasic()
    {
        /**
         * The elements of each array are, in order:
         *      - minimum
         *      - expected validation result
         *      - array of test input values
         */
        $valuesExpected = [
            [0, true, [0.01, 1, 100]],
            [0, false, [0, 0.00, -0.01, -1, -100]],
            ['a', true, ['b', 'c', 'd']],
            ['z', false, ['x', 'y', 'z']],
            [['min' => 0, 'inclusive' => true], true, [0, 0.00, 0.01, 1, 100]],
            [['min' => 0, 'inclusive' => true], false, [-0.01, -1, -100]],
            [['min' => 0, 'inclusive' => false], true, [0.01, 1, 100]],
            [['min' => 0, 'inclusive' => false], false, [0, 0.00, -0.01, -1, -100]],
        ];

        foreach ($valuesExpected as $element) {
            $validator = new GreaterThan($element[0]);
            foreach ($element[2] as $input) {
                $this->assertEquals($element[1], $validator->isValid($input));
            }
        }
    }

    /**
     * Ensures that getMessages() returns expected default value
     *
     * @return void
     */
    public function testGetMessages()
    {
        $validator = new GreaterThan(10);
        $this->assertEquals([], $validator->getMessages());
    }

    /**
     * Ensures that getMin() returns expected value
     *
     * @return void
     */
    public function testGetMin()
    {
        $validator = new GreaterThan(10);
        $this->assertEquals(10, $validator->getMin());
    }

    /**
     * Ensures that getInclusive() returns expected default value
     *
     * @return void
     */
    public function testGetInclusive()
    {
        $validator = new GreaterThan(10);
        $this->assertEquals(false, $validator->getInclusive());
    }

    public function testEqualsMessageTemplates()
    {
        $validator = new GreaterThan(1);
        $this->assertAttributeEquals(
            $validator->getOption('messageTemplates'),
            'messageTemplates',
            $validator
        );
    }

    public function testEqualsMessageVariables()
    {
        $validator = new GreaterThan(1);
        $this->assertAttributeEquals(
            $validator->getOption('messageVariables'),
            'messageVariables',
            $validator
        );
    }

    public function testCorrectInclusiveMessageReturn()
    {
        $valuesToValidate = [0, 0.5, 5, 10];

        foreach ($valuesToValidate as $value) {
            $validator = new GreaterThan(10);
            $validator->isValid($value);
            $message = $validator->getMessages();

            $this->assertArrayHaskey('notGreaterThan', $message);
            $this->assertEquals($message['notGreaterThan'], "The input is not greater than '10'");
        }
    }

    public function testCorrectNotInclusiveMessageReturn()
    {
        $valuesToValidate = [0, 0.5, 5, 9];

        foreach ($valuesToValidate as $value) {
            $validator = new GreaterThan(['min' => 10, 'inclusive' => true]);
            $validator->isValid($value);
            $message = $validator->getMessages();

            $this->assertArrayHaskey('notGreaterThanInclusive', $message);
            $this->assertEquals($message['notGreaterThanInclusive'], "The input is not greater than or equal to '10'");
        }
    }

    public function testConstructorCanAcceptInclusiveFlagAsAnArgument()
    {
        $validator = new GreaterThan(10, true);
        $this->assertTrue($validator->getInclusive());
    }
}
