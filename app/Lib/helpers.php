<?php

use App\Models\Translation;
use Illuminate\Support\Facades\App;

if (!function_exists('__t')) {
    function __t($key)
    {
        $locale = App::getLocale();
        $translation = Translation::where('key', $key)->first();

        return $translation ? $translation->$locale : $key;
    }
}
