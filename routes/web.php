<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/themsach","App\Http\Controllers\BookController@themsach");
Route::post("/qlsach/luutheloai","App\Http\Controllers\BookController@luutheloai");


Route::get('/add_theloai',"App\Http\Controllers\AddController@viewadd");
Route::post('/themtheloai','App\Http\Controllers\AddController@addtheloai');

Route::get('/themtheloai',"App\Http\Controllers\ThemController@view_them");
Route::post('/them_the_loai','App\Http\Controllers\ThemController@them_theloai');

Route::get("/trang1",'App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');


Route::get('/inten','App\Http\Controllers\ViDuController@inten');

Route::get('/inten1','App\Http\Controllers\ViDuController@inten1');

