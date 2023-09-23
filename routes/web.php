<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts/app');
});

function teste(){
    $slot = 'teste';


    return $slot;
}