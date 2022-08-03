<?php

/**
 * Date Formatting Function
 * 
 * @param date/datetime $date Whait for date;
 * @param string $format Expect the date format, ex: d/m/Y or Y-m-d;
 * @return date/datetime Return a date or datetime.
 */
function dateFormat($date, $format = "d/m/Y") {

    return $newDate = date($format, strtotime(str_replace("/", "-", $date)));
}