<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Market\Framework;

use PHPUnit_Framework_TestCase;

/**
 * Class TestCase
 */
class TestCase extends PHPUnit_Framework_TestCase
{

    public static $locator;

    /**
     * Set locator
     *
     * @param $locator
     */
    public static function setLocator($locator)
    {
        self::$locator = $locator;
    }

    /**
     * Get Locator
     *
     * @return mixed
     */
    public function getLocator()
    {
        return self::$locator;
    }
}
