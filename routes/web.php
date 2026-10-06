<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerWeb;



Route::get('/', [ControllerWeb::class, 'index']);