<?php

use App\Models\Pref;
use Illuminate\Support\Str;

function setting(string $key) {
    return Pref::where('key', $key)->value('value');
}

function str_limit($title = null, $length = 10) {
    return Str::limit($title, $length);
}
