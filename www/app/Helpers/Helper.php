<?php

if (!function_exists('debug')) {

    /**
     * log information quickly, handling string or list
     *
     * @param [string] $path
     *
     * @return void
     */
    function debug($arg)
    {
        $str = is_string($arg) ? $arg : var_export($arg, true);
        Log::debug($str);
    }
}

if (!function_exists('removeMask')) {

    /**
     * exclude all charecter not number
     *
     * @param [string] $path
     *
     * @return void
     */
    function removeMask($str)
    {
        return preg_replace('/[^0-9]/', '', $str);
    }
}

if (!function_exists('parseDateToEn')) {

    /**
     * format date pt to pattern en
     *
     * @param [date] $datePt
     *
     * @return date
     */
    function parseDateToEn($datePt)
    {
        $date = \Carbon\Carbon::createFromFormat('d/m/Y', $datePt);
        return $date->format('Y-m-d');
    }
}

if (!function_exists('zeroLeft')) {

    /**
     * complete text with number zero on the left
     *
     * @param [string] $text
     * @param [int] $amount
     *
     * @return string
     */
    function zeroLeft($text, $amount)
    {
        return str_pad($text, $amount, 0, STR_PAD_LEFT);
    }
}

if (!function_exists('getMonthYearDesc')) {

    /**
     * Get string date
     *
     * @param [string] $date
     *
     * @return string date formatted
     */
    function getMonthYearDesc($dataVencimento)
    {
        $lastMonth = date(
            'Y-m-d',
            strtotime('-1 month', strtotime($dataVencimento))
        );

        setlocale(
            LC_ALL,
            'pt_BR',
            'pt_BR.iso-8859-1',
            'pt_BR.utf-8',
            'portuguese'
        );

        date_default_timezone_set('America/Sao_Paulo');
        return strftime('%B/%Y', strtotime($lastMonth));
    }
}
