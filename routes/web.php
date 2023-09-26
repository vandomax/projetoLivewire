<?php

use App\Livewire\ShowTweets;
use Illuminate\Support\Facades\Route;

Route::get('tweets', ShowTweets::class);

Route::get('/', function () {
    return view('components/layouts/app');
});