<?php

/*
 * This file is part of the Packtest package.
 *
 * (c) Yanguang Lan <lanyg.com@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Packtest;

/**
 * Color output
 *
 * @author Yanguang Lan <lanyg.com@gmail.com>
 */
class Color
{
    /**#@+
     * @const string Color constant names
     */
    const COLOR_BLACK = '#000000';
    const COLOR_WHITE = '#ff00ff';
    /**#@-*/
    
    /**
     * @var string
     */
    protected static $output_color = self::COLOR_BLACK;
    
    /**
     * Translation the string output in color 
     *
     * @param string $string
     * @return string
     */
    public static function translation($string)
    {
        if (self::$output_color == self::COLOR_BLACK) {
            self::$output_color = self::COLOR_WHITE;
            return "<div style='color:" . self::COLOR_WHITE . "'>" . $string . "<div>";
        } else {
            self::$output_color = self::COLOR_BLACK;
            return "<div style='color:" . self::COLOR_BLACK . "'>" . $string . "<div>";
        }
    }
}