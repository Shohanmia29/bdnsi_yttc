<?php

namespace App\Lib;

class Helper
{

    public static function serialNumber($id) {


        $number = '305071273';
        $length = 9;

        // Convert $id to string to handle numeric IDs
        $id = (string)$id;

        // Calculate how much padding is needed
        $paddingLength = $length - strlen($id);

        // Create the padding from $number and concatenate with $id
        $paddedId = substr($number, 0, $paddingLength) . $id;

        return $paddedId;
    }


}
