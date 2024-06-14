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

Route::group(['middleware' => ['guest']] , function()
{
    Route:: get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@cekLogin");
});

Route::group(['middleware' => ['auth']] , function()
{
    Route::get("/user", "PageController@formedituser");
    Route::get("/home", "PageController@home");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/logout", "AuthController@cekLogout");

    //Add Data
    Route::get("/masterdata", "PageController@masterdata");
    Route::get("/masterdata/add-form", "PageController@formaddmasterdata");
    Route::post("/save", "PageController@savemasterdata");

    // Update Data
    Route::get('/masterdata/edit-form/{id}', "PageController@formeditmasterdata");
    Route::put("update/{id}", "PageController@updatemasterdata");

    //Delete Data
    Route::get("/delete/{id}", "PageController@deletemasterdata");
});










