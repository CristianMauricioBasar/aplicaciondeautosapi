<?php

use Illuminate\Support\Facades\Route;

Route::get('/resetearmigraciones', function () {
    Artisan::call('migrate:fresh');
    return "Completado";
});

Route::get('/limpiarcache', function () {
    Artisan::call('config:cache');
    return "Completado";
});

Route::get('/migrar', function () {
    Artisan::call('migrate');
    return "Completado";
});
