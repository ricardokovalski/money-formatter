<?php

if ( ! function_exists('toInteger'))
{
    /**
     * @param $amount
     * @return int
     */
    function toInteger($amount)
    {
        return round($amount, 2) * 100;
    }
}
