<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

    $users = DB::table('users')->get();

    //$aUser = DB::select('select * from users where id = ?', [1]);

    // $liteUser = DB::connection('sqlite')->select('select * from users');


    $comments = DB::table('comments')->get();

//    dump("mysql:", $aUser);

    dump($users, $comments);

    return view('welcome');
});
