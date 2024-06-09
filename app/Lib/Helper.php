<?php

namespace App\Lib;

class Helper
{

    public static function serialNumber($id){
        return str_pad($id, 6, '0', STR_PAD_LEFT);
    }


}
