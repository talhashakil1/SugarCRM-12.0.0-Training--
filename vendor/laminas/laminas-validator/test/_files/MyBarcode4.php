<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Validator\Barcode;

class MyBarcode4 extends AbstractAdapter
{
    public function __construct()
    {
        $this->setLength('odd');
        $this->setCharacters(128);
        $this->setChecksum('_mod10');
    }
}
