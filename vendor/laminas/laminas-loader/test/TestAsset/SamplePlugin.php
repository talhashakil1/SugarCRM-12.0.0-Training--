<?php

/**
 * @see       https://github.com/laminas/laminas-loader for the canonical source repository
 * @copyright https://github.com/laminas/laminas-loader/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-loader/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Loader\TestAsset;

/**
 * @group      Loader
 */
class SamplePlugin
{
    public $options;

    public function __construct($options = null)
    {
        $this->options = $options;
    }
}
