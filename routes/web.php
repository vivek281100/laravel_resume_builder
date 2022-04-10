<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumedetailsController;

Route::get('/', function () {
    return view('Main');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::view("/about",'menus.about');
Route::view("/home",'Main');
Auth::routes();
Route::view("/service",'menus.service');
Route::get("/Resume/resumepage1",[ResumedetailsController::class,'create']);
Route::post("/Resume",[ResumedetailsController::class,'store']); 
Route::get("education/resumepage2",[educationController::class,'create']);

//redirects to login if not logged in
// Route::get('/profile', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });

//prevents to go to login page if a session is active
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

