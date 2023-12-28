<?php

function replace_blank($str)
{
    return str_replace(' ', '_', $str);
};

function replace_accent($str)
{
    $result = $str;
    if (strpos($result, 'é')) {
        $result = str_replace('é', 'e', $result);
    }
    if (strpos($result, 'è')) {
        $result = str_replace('è', 'e', $result);
    }
    if (strpos($result, 'ë')) {
        $result = str_replace('ë', 'e', $result);
    }
    if (strpos($result, 'à')) {
        $result = str_replace('à', 'a', $result);
    }
    if (strpos($result, 'â')) {
        $result = str_replace('â', 'a', $result);
    }
    if (strpos($result, 'ä')) {
        $result = str_replace('ä', 'a', $result);
    }
    if (strpos($result, 'ç')) {
        $result = str_replace('ç', 'c', $result);
    }
    if (strpos($result, 'ù')) {
        $result = str_replace('ù', 'u', $result);
    }
    if (strpos($result, 'ñ')) {
        $result = str_replace('ñ', 'n', $result);
    }
    if (strpos($result, 'ô')) {
        $result = str_replace('ô', 'u', $result);
    }
    if (strpos($result, 'ö')) {
        $result = str_replace('ö', 'u', $result);
    }
    return $result;
}

function replace_reunion_char($str)
{
    $result = $str;
    if (strpos($result, '\'')) {
        $result = str_replace('\'', '', $result);
    }
    if (strpos($result, ' ')) {
        $result = str_replace(' ', '', $result);
    }
    if (strpos($result, '_')) {
        $result = str_replace('_', '', $result);
    }
    if (strpos($result, '°')) {
        $result = str_replace('°', '', $result);
    }
    return $result;
}

function trad_month($date)
{
    if (strpos($date, 'January')) {
        $date = str_replace('January', 'Janvier', $date);
    }
    if (strpos($date, 'February')) {
        $date = str_replace('February', 'Février', $date);
    }
    if (strpos($date, 'March')) {
        $date = str_replace('March', 'Mars', $date);
    }
    if (strpos($date, 'April')) {
        $date = str_replace('April', 'Avril', $date);
    }
    if (strpos($date, 'May')) {
        $date = str_replace('May', 'Mai', $date);
    }
    if (strpos($date, 'June')) {
        $date = str_replace('June', 'Juin', $date);
    }
    if (strpos($date, 'July')) {
        $date = str_replace('July', 'Juillet', $date);
    }
    if (strpos($date, 'August')) {
        $date = str_replace('August', 'Août', $date);
    }
    if (strpos($date, 'ber')) {
        $date = str_replace('ber', 'bre', $date);
    }
    if (strpos($date, 'Dec')) {
        $date = str_replace('Dec', 'Déc', $date);
    }
    return $date;
}
