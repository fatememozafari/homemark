<?php


if (!function_exists('setting')) {

    function setting()
    {

        $setting = \App\Models\Config::query()->where('key','real-estate-setting')->first();
        return $setting;
    }

}


