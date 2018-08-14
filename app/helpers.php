<?php

/**
 * @param $price
 * @return string
 */
function presentPrice($price)
{
    return '$' . number_format($price / 100, 2);
}