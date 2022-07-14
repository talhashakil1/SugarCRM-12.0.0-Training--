<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Validator\File;

use Laminas\Validator\Exception\InvalidArgumentException;
use Laminas\Validator\File;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

/**
 * Hash testbed
 *
 * @group      Laminas_Validator
 */
class HashTest extends TestCase
{
    /**
     * @return array
     */
    public function basicBehaviorDataProvider()
    {
        $testFile = __DIR__ . '/_files/picture.jpg';
        $pictureTests = [
            //    Options, isValid Param, Expected value, Expected message
            ['3f8d07e2',               $testFile, true, ''],
            ['9f8d07e2',               $testFile, false, 'fileHashDoesNotMatch'],
            [['9f8d07e2', '3f8d07e2'], $testFile, true, ''],
            [['9f8d07e2', '7f8d07e2'], $testFile, false, 'fileHashDoesNotMatch'],
            [
                ['ed74c22109fe9f110579f77b053b8bc3', 'algorithm' => 'md5'],
                $testFile, true, '',
            ],
            [
                ['4d74c22109fe9f110579f77b053b8bc3', 'algorithm' => 'md5'],
                $testFile, false, 'fileHashDoesNotMatch',
            ],
            [
                ['4d74c22109fe9f110579f77b053b8bc3', 'ed74c22109fe9f110579f77b053b8bc3', 'algorithm' => 'md5'],
                $testFile, true, '',
            ],
            [
                ['4d74c22109fe9f110579f77b053b8bc3', '7d74c22109fe9f110579f77b053b8bc3', 'algorithm' => 'md5'],
                $testFile, false, 'fileHashDoesNotMatch',
            ],
        ];

        $testFile = __DIR__ . '/_files/nofile.mo';
        $noFileTests = [
            //    Options, isValid Param, Expected value, message
            ['3f8d07e2', $testFile, false, 'fileHashNotFound'],
        ];

        $testFile = __DIR__ . '/_files/testsize.mo';
        $sizeFileTests = [
            //    Options, isValid Param, Expected value, message
            ['ffeb8d5d', $testFile, true,  ''],
            ['9f8d07e2', $testFile, false, 'fileHashDoesNotMatch'],
        ];

        // Dupe data in File Upload format
        $testData = array_merge($pictureTests, $noFileTests, $sizeFileTests);
        foreach ($testData as $data) {
            $fileUpload = [
                'tmp_name' => $data[1],
                'name'     => basename($data[1]),
                'size'     => 200,
                'error'    => 0,
                'type'     => 'text',
            ];
            $testData[] = [$data[0], $fileUpload, $data[2], $data[3]];
        }
        return $testData;
    }

    /**
     * Ensures that the validator follows expected behavior
     *
     * @dataProvider basicBehaviorDataProvider
     * @return void
     */
    public function testBasic($options, $isValidParam, $expected, $messageKey)
    {
        $validator = new File\Hash($options);
        $this->assertEquals($expected, $validator->isValid($isValidParam));
        if (! $expected) {
            $this->assertArrayHasKey($messageKey, $validator->getMessages());
        }
    }

    /**
     * Ensures that the validator follows expected behavior for legacy Laminas\Transfer API
     *
     * @dataProvider basicBehaviorDataProvider
     * @return void
     */
    public function testLegacy($options, $isValidParam, $expected, $messageKey)
    {
        if (is_array($isValidParam)) {
            $validator = new File\Hash($options);
            $this->assertEquals($expected, $validator->isValid($isValidParam['tmp_name'], $isValidParam));
            if (! $expected) {
                $this->assertArrayHasKey($messageKey, $validator->getMessages());
            }
        }
    }

    /**
     * Ensures that getHash() returns expected value
     *
     * @return void
     */
    public function testgetHash()
    {
        $validator = new File\Hash('12345');
        $this->assertEquals(['12345' => 'crc32'], $validator->getHash());

        $validator = new File\Hash(['12345', '12333', '12344']);
        $this->assertEquals(['12345' => 'crc32', '12333' => 'crc32', '12344' => 'crc32'], $validator->getHash());
    }

    /**
     * Ensures that setHash() returns expected value
     *
     * @return void
     */
    public function testSetHash()
    {
        $validator = new File\Hash('12345');
        $validator->setHash('12333');
        $this->assertEquals(['12333' => 'crc32'], $validator->getHash());

        $validator->setHash(['12321', '12121']);
        $this->assertEquals(['12321' => 'crc32', '12121' => 'crc32'], $validator->getHash());
    }

    /**
     * Ensures that addHash() returns expected value
     *
     * @return void
     */
    public function testAddHash()
    {
        $validator = new File\Hash('12345');
        $validator->addHash('12344');
        $this->assertEquals(['12345' => 'crc32', '12344' => 'crc32'], $validator->getHash());

        $validator->addHash(['12321', '12121']);
        $this->assertEquals(
            ['12345' => 'crc32', '12344' => 'crc32', '12321' => 'crc32', '12121' => 'crc32'],
            $validator->getHash()
        );
    }

    /**
     * @group Laminas-11258
     */
    public function testLaminas11258()
    {
        $validator = new File\Hash('3f8d07e2');
        $this->assertFalse($validator->isValid(__DIR__ . '/_files/nofile.mo'));
        $this->assertArrayHasKey('fileHashNotFound', $validator->getMessages());
        $this->assertStringContainsString('does not exist', current($validator->getMessages()));
    }

    public function testEmptyFileShouldReturnFalseAndDisplayNotFoundMessage()
    {
        $validator = new File\Hash();

        $this->assertFalse($validator->isValid(''));
        $this->assertArrayHasKey(File\Hash::NOT_FOUND, $validator->getMessages());

        $filesArray = [
            'name'      => '',
            'size'      => 0,
            'tmp_name'  => '',
            'error'     => UPLOAD_ERR_NO_FILE,
            'type'      => '',
        ];

        $this->assertFalse($validator->isValid($filesArray));
        $this->assertArrayHasKey(File\Hash::NOT_FOUND, $validator->getMessages());
    }

    public function invalidHashTypes()
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
     * @dataProvider invalidHashTypes
     */
    public function testAddHashRaisesExceptionForInvalidType($value)
    {
        $validator = new File\Hash('12345');
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('False parameter given');
        $validator->addHash($value);
    }

    public function testAddHashRaisesExceptionWithInvalidAlgorithm()
    {
        $validator = new File\Hash('12345');
        $algorithm = 'foobar123';
        $options   = ['algorithm' => $algorithm];
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf("Unknown algorithm '%s'", $algorithm));
        $validator->addHash($options);
    }

    public function testIsValidRaisesExceptionForArrayValueNotInFilesFormat()
    {
        $validator = new File\Hash('12345');
        $value     = ['foo' => 'bar'];
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Value array must be in $_FILES format');
        $validator->isValid($value);
    }

    public function testConstructorCanAcceptAllOptionsAsDiscreteArguments()
    {
        $algorithm = 'md5';
        $validator = new File\Hash('12345', $algorithm);

        $r = new ReflectionProperty($validator, 'options');
        $r->setAccessible(true);
        $options = $r->getValue($validator);
        $this->assertSame($algorithm, $options['algorithm']);
    }

    /**
     * @dataProvider invalidHashTypes
     *
     * @param mixed $hash
     */
    public function testInvalidHashProvidedInArrayFormat($hash)
    {
        $validator = new File\Hash('12345');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Hash must be a string');
        $validator->addHash([$hash]);
    }

    public function testIntHash()
    {
        $validator = new File\Hash('10713230');

        self::assertTrue($validator->isValid(__DIR__ . '/_files/crc32-int.pdf'));
    }

    public function testHashMustMatchWithTheAlgorithm()
    {
        $validator = new File\Hash();
        // swapped hashes for given algorithms
        $validator->addHash(['6507f172bceb9ed0cc59246d41569c4d', 'algorithm' => 'crc32']);
        $validator->addHash(['10713230', 'algorithm' => 'md5']);

        self::assertFalse($validator->isValid(__DIR__ . '/_files/crc32-int.pdf'));
    }
}
