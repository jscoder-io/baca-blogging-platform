<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    function setting($path)
    {
        $value = Setting::getByPath($path);

        return $value ?: config($path, null);
    }
}
