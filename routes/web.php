<?php

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
    return view('blade.home');
});
Route::get('/manage', function () {
    return view('blade.manage');
});
Route::get('/home', function () {
    return view('blade.home');
});
route::get('/date',function (){
    return view('blade.bndate');

});
//route::get('/edit_date/{id}/edit',function ($id){
//    return view('blade.edit_date');
//});
route::get("/welcome",function(){
    return view('welcome');
});
Route::get('/dept', function () {
    return view('blade.dept');
});
Route::get('/notice','noticecontroller@getnotice') ;


Route::get('/about', function () {
    return view('blade.contact');
});

Route::get("/icon",function(){


    return view('blade.icon');
});
//Route::get('/teacher',function(){
//return view('blade.teacher');
//
//});
//route::get("/pdf","pdfcontroller@index");
route::resource('/hall','HallController');
route::get('/store_index','HallController@store_index');
route::resource('store','storecontroller');
//dept_name
route::resource('dept',"deptcontroller");
//route::get('teacher',"deptcontroller@send")->name('send');
Route::resource('name','teachercontroller');

Route::get('/contact',function (){
return view('blade.contactus');

});
use Illuminate\Database;
//route::get('/pdf','noticecontroller@index');
Route::get('/convert',"pdfcontroller@pdf_converter");
route::get('/html',function(){
    return view('blade.htmltopdf');
});
Route::resource("/room","roomcontroller");
Route::resource('notices',"noticecontroller");
route::get("/new",function (){
    return view('blade.new');
});
route::get("/print","teachercontroller@print");