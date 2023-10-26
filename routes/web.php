<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffViewController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('menu_list_of_staff');   
});

Route::get('/modal_staff_details', function () {
    return view('modal_view_staff');   
});


