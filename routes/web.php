<?php
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test_tailwind');
});

Route::get('/login', function () {
    return Inertia::render('Index',[]);
 });

Route::get('/welcome', function () {
    $current_date=getdate();
    $sysdate=  "$current_date[mday]-$current_date[mon]-$current_date[year]";
    return Inertia::render('Welcome',['sysdate'=> $sysdate]);
 });
