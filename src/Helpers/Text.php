<?php


namespace Wedyapancer\Wedyapancer\Helpers;

class Text
{
    public static function removeSpecialChars($string)
    {
        $string = str_replace(' ', '_', $string);
        return preg_replace('/[^A-Za-z0-9_.]/', '', $string);
    }

    /**
     * Generate Random IdCarcNumber
     * use for random Generation for seeder and generate data
     * 
     * @return string
     */
    public static function generateIdCardNumber(): string
    {
        $randomNumber = mt_rand(1000, 9999);
        $getUnix = time();

        return $getUnix . $randomNumber;
    }

    /**
     * Generate Full Random file name text
     * 
     * @param string $name
     * @return string 
     */
    public static function generateRandomFileName(string $name = "jpg"): string
    {

        $uniq = uniqid("w");
        $result = $uniq . "." . $name;

        return $result;
    }
}
