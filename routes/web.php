<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Central (non-tenant) routes
foreach (config('tenancy.identification.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // Laravel default welcome route
        Route::get('/', function () {
            return view('welcome');
        });
    });
}
