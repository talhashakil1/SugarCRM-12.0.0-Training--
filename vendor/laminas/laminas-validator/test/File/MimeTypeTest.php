<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Validator\File;

use Laminas\Validator\Exception\InvalidArgumentException;
use Laminas\Validator\Exception\InvalidMagicMimeFileException;
use Laminas\Validator\File;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

/**
 * MimeType testbed
 *
 * @group      Laminas_Validator
 */
class MimeTypeTest extends TestCase
{
    /**
     * @return array
     */
    public function basicBehaviorDataProvider()
    {
        $testFile = __DIR__ . '/_files/picture.jpg';
        $fileUpload = [
            'tmp_name' => $testFile,
            'name'     => basename($testFile),
            'size'     => 200,
            'error'    => 0,
            'type'     => 'image/jpg',
        ];
        return [
            //    Options, isValid Param, Expected value
            [['image/jpg', 'image/jpeg'],               $fileUpload, true],
            ['image',                                   $fileUpload, true],
            ['test/notype',                             $fileUpload, false],
            ['image/gif, image/jpg, image/jpeg',        $fileUpload, true],
            [['image/vasa', 'image/jpg', 'image/jpeg'], $fileUpload, true],
            [['image/jpg', 'image/jpeg', 'gif'],        $fileUpload, true],
            [['image/gif', 'gif'],                      $fileUpload, false],
            ['image/jp',                                $fileUpload, false],
            ['image/jpg2000',                           $fileUpload, false],
            ['image/jpeg2000',                          $fileUpload, false],
        ];
    }

    /**
     * Ensures that the validator follows expected behavior
     *
     * @dataProvider basicBehaviorDataProvider
     * @return void
     */
    public function testBasic($options, $isValidParam, $expected)
    {
        $validator = new File\MimeType($options);
        $validator->enableHeaderCheck();
        $this->assertEquals($expected, $validator->isValid($isValidParam));
    }

    /**
     * Ensures that the validator follows expected behavior for legacy Laminas\Transfer API
     *
     * @dataProvider basicBehaviorDataProvider
     * @return void
     */
    public function testLegacy($options, $isValidParam, $expected)
    {
        if (is_array($isValidParam)) {
            $validator = new File\MimeType($options);
            $validator->enableHeaderCheck();
            $this->assertEquals($expected, $validator->isValid($isValidParam['tmp_name'], $isValidParam));
        }
    }

    /**
     * Ensures that getMimeType() returns expected value
     *
     * @return void
     */
    public function testGetMimeType()
    {
        $validator = new File\MimeType('image/gif');
        $this->assertEquals('image/gif', $validator->getMimeType());

        $validator = new File\MimeType(['image/gif', 'video', 'text/test']);
        $this->assertEquals('image/gif,video,text/test', $validator->getMimeType());

        $validator = new File\MimeType(['image/gif', 'video', 'text/test']);
        $this->assertEquals(['image/gif', 'video', 'text/test'], $validator->getMimeType(true));
    }

    /**
     * Ensures that setMimeType() returns expected value
     *
     * @return void
     */
    public function testSetMimeType()
    {
        $validator = new File\MimeType('image/gif');
        $validator->setMimeType('image/jpeg');
        $this->assertEquals('image/jpeg', $validator->getMimeType());
        $this->assertEquals(['image/jpeg'], $validator->getMimeType(true));

        $validator->setMimeType('image/gif, text/test');
        $this->assertEquals('image/gif,text/test', $validator->getMimeType());
        $this->assertEquals(['image/gif', 'text/test'], $validator->getMimeType(true));

        $validator->setMimeType(['video/mpeg', 'gif']);
        $this->assertEquals('video/mpeg,gif', $validator->getMimeType());
        $this->assertEquals(['video/mpeg', 'gif'], $validator->getMimeType(true));
    }

    /**
     * Ensures that addMimeType() returns expected value
     *
     * @return void
     */
    public function testAddMimeType()
    {
        $validator = new File\MimeType('image/gif');
        $validator->addMimeType('text');
        $this->assertEquals('image/gif,text', $validator->getMimeType());
        $this->assertEquals(['image/gif', 'text'], $validator->getMimeType(true));

        $validator->addMimeType('jpg, to');
        $this->assertEquals('image/gif,text,jpg,to', $validator->getMimeType());
        $this->assertEquals(['image/gif', 'text', 'jpg', 'to'], $validator->getMimeType(true));

        $validator->addMimeType(['zip', 'ti']);
        $this->assertEquals('image/gif,text,jpg,to,zip,ti', $validator->getMimeType());
        $this->assertEquals(['image/gif', 'text', 'jpg', 'to', 'zip', 'ti'], $validator->getMimeType(true));

        $validator->addMimeType('');
        $this->assertEquals('image/gif,text,jpg,to,zip,ti', $validator->getMimeType());
        $this->assertEquals(['image/gif', 'text', 'jpg', 'to', 'zip', 'ti'], $validator->getMimeType(true));
    }

    public function testSetAndGetMagicFile()
    {
        if (! extension_loaded('fileinfo')) {
            $this->markTestSkipped('This PHP Version has no finfo installed');
        }

        $validator = new File\MimeType('image/gif');
        $magic     = getenv('magic');
        if (! empty($magic)) {
            $mimetype  = $validator->getMagicFile();
            $this->assertEquals($magic, $mimetype);
        }

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('could not be');
        $validator->setMagicFile('/unknown/magic/file');
    }

    public function testSetMagicFileWithinConstructor()
    {
        if (! extension_loaded('fileinfo')) {
            $this->markTestSkipped('This PHP Version has no finfo installed');
        }

        $this->expectException(InvalidMagicMimeFileException::class);
        $this->expectExceptionMessage('could not be used by ext/finfo');
        $validator = new File\MimeType(['image/gif', 'magicFile' => __FILE__]);
    }

    public function testOptionsAtConstructor()
    {
        $validator = new File\MimeType([
            'image/gif',
            'image/jpg',
            'enableHeaderCheck' => true,
        ]);

        $this->assertTrue($validator->getHeaderCheck());
        $this->assertEquals('image/gif,image/jpg', $validator->getMimeType());
    }

    /**
     * @group Laminas-11258
     */
    public function testLaminas11258()
    {
        $validator = new File\MimeType([
            'image/gif',
            'image/jpg',
            'headerCheck' => true,
        ]);

        $this->assertFalse($validator->isValid(__DIR__ . '/_files/nofile.mo'));
        $this->assertArrayHasKey('fileMimeTypeNotReadable', $validator->getMessages());
        $this->assertStringContainsString('does not exist', current($validator->getMessages()));
    }

    public function testDisableMagicFile()
    {
        $validator = new File\MimeType('image/gif');
        $magic     = getenv('magic');
        if (! empty($magic)) {
            $mimetype  = $validator->getMagicFile();
            $this->assertEquals($magic, $mimetype);
        }

        $validator->disableMagicFile(true);
        $this->assertTrue($validator->isMagicFileDisabled());

        if (! empty($magic)) {
            $mimetype  = $validator->getMagicFile();
            $this->assertEquals($magic, $mimetype);
        }
    }

    /**
     * @group Laminas-10461
     */
    public function testDisablingMagicFileByConstructor()
    {
        $files = [
            'name'     => 'picture.jpg',
            'size'     => 200,
            'tmp_name' => dirname(__FILE__) . '/_files/picture.jpg',
            'error'    => 0,
            'magicFile' => false,
        ];

        $validator = new File\MimeType($files);
        $this->assertFalse($validator->getMagicFile());
    }

    public function testEmptyFileShouldReturnFalseAndDisplayNotFoundMessage()
    {
        if (! extension_loaded('fileinfo')) {
            $this->markTestSkipped('This PHP Version has no finfo installed');
        }

        $validator = new File\MimeType();

        $this->assertFalse($validator->isValid(''));

        $filesArray = [
            'name'     => '',
            'size'     => 0,
            'tmp_name' => '',
            'error'    => UPLOAD_ERR_NO_FILE,
            'type'     => '',
        ];

        $this->assertFalse($validator->isValid($filesArray));
    }

    public function testConstructorCanAcceptOptionsArray()
    {
        $mimeType  = 'image/gif';
        $options   = ['mimeType' => $mimeType];
        $validator = new File\MimeType($options);
        $this->assertSame($mimeType, $validator->getMimeType());
    }

    public function testSettingMagicFileWithEmptyArrayNullifiesValue()
    {
        $validator = new File\MimeType();
        $validator->setMagicFile([]);

        $r = new ReflectionProperty($validator, 'options');
        $r->setAccessible(true);

        $options = $r->getValue($validator);
        $this->assertNull($options['magicFile']);
    }

    public function invalidMimeTypeTypes()
    {
        return [
            'null'       => [null],
            'true'       => [true],
            'false'      => [false],
            'zero'       => [0],
            'int'        => [1],
            'zero-float' => [0.0],
            'float'      => [1.1],
            'object'     => [(object) []],
        ];
    }

    /**
     * @dataProvider invalidMimeTypeTypes
     */
    public function testAddingMimeTypeWithInvalidTypeRaisesException($type)
    {
        $validator = new File\MimeType();
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid options to validator provided');
        $validator->addMimeType($type);
    }

    public function testAddingMimeTypeUsingMagicFileArrayKeyIgnoresKey()
    {
        $validator = new File\MimeType('image/gif');

        $mimeTypeArray = [
            'magicFile' => 'test.txt',
            'gif'       => 'text',
        ];

        $validator->addMimeType($mimeTypeArray);

        $this->assertSame('image/gif,text', $validator->getMimeType());
        $this->assertSame(['image/gif', 'text'], $validator->getMimeType(true));
    }

    public function testIsValidRaisesExceptionWithArrayNotInFilesFormat()
    {
        $validator = new File\MimeType('image\gif');
        $value     = ['foo' => 'bar'];
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Value array must be in $_FILES format');
        $validator->isValid($value);
    }
}
