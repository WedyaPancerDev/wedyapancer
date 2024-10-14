<?php


namespace Wedyapancer\Wedyapancer\Helpers;

class Text
{
    public function removeSpecialChars($string)
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
    public function generateIdCardNumber(): string
    {
        $randomNumber = mt_rand(1000, 9999);
        $getUnix = time();

        return $getUnix . $randomNumber;
    }
}
