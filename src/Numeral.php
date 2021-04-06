<?php

/**
 * Class Numeral
 * @package Numeral
 * @author HungRbmt <http://github.com/hrbmt>
 * @link  https://github.com/hrbmt/Numeral
 */
namespace Hrbmt\Numeral;

class Numeral
{
    /**
     * @var string
     */
    private static $number = '';

    /**
     * @var string
     */
    private static $format = '0,0';

    /**
     * @param $number
     *
     * @return $this
     */
    public static function setNumber($number)
    {
        self::$number = $number;

        return new static(null, $number);
    }

    /**
     * @param null $format
     *
     * @return string
     */
    public function format($format = null)
    {
        self::$format = $format;
        return $this->formatNumber();
    }

    /**
     * @return string
     */
    public function formatNumber()
    {
        $decimals = $this->getDecimals(self::$format);

        if (strpos(self::$format, ",") === false) {
            return number_format(self::$number, $decimals, '.', '');
        }
        return number_format(self::$number, $decimals);
    }

    /**
     * @param $decimals
     *
     * @return integer
     */
    public function getDecimals($decimals)
    {
        return (int) strlen(substr(strrchr($decimals, "."), 1));
    }
}
