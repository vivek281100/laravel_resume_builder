<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anuthentication;
//use App\Http\controllers\uploadfile;
use App\Http\controllers\calculater;

Route::get('/', function () {
    return view('front');
});

Route::view("/about",'menus.about');
Route::view("/home",'menus.home');
Route::view("/service",'menus.service');
Route::view("/login","login");
Route::post("marks",[calculater::class,'cal']);


Route::post("user",[anuthentication::class,'userLogin']);
Route::view('/profile','profile');
//redirects to login if not logged in
// Route::get('/profile', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });

//prevents to go to login page if a session is active
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

//closses a session and redirects to login.
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});
//-----------------------------------------------------------------------------


//-------------------------------------------------------------------------
/*
Route::view("upload",'upload');
Route:: post('upload',[uploadfile::class,'uploader']);
*/
//--------------------------------------------------------------------------


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
//--------------------------------------------------------------------------------

