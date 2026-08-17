<?php

use Illuminate\Support\Facades\Route;


Route::livewire('/', 'home')->name('home');
Route::livewire('hymn/{hymn}', 'details')->name('hymn');
Route::livewire('settings', 'settings')->name('pref');