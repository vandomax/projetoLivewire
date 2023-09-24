<?php

use App\Livewire\ShowTweets;
use Illuminate\Support\Facades\Route;

Route::get('tweets', [ShowTweets::class, 'render']);

Route::get('/', function () {
    return view('layouts/app');
});

function teste(){
    $slot = 'teste';


    return $slot;
}