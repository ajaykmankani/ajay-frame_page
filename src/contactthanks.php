<?php

if (!empty($_POST)) {
    foreach ($_POST as $key => $val) {
        $arr[] = $key . ": " . $val . "      ";
    }
    $str = implode('', $arr);

    $to = "info@bestsatellitetvdeals.com";
    $subject = "Query On Website";
    $msg = $str;
    $header = "Best Satellight Tv Ideas Website Query";

    if (mail($to, $subject, $msg, $header)) {

        echo "<script type='text/javascript'>window.location='thankyou.php';</script>";
    } else {

        echo "<script type='text/javascript'> window.location='error.php';</script>";
    }
}
