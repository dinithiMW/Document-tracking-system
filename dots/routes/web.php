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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']],function(){
 
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/branch', 'Admin\BranchController@branch');
    Route::post('/addNewBranch', 'Admin\BranchController@addNewBranch');
    Route::get('/branch', 'Admin\BranchController@registered');
    Route::get('/document', 'Admin\DocumentController@addDocument');
    Route::post('/addNewDocument', 'Admin\DocumentController@addNewDocument');
    Route::get('/document','Admin\DocumentController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update{id}','Admin\DashboardController@registerupdate');
    Route::get('/branch-edit/{branch_id}','Admin\BranchController@registeredit');
    Route::put('/branch-register-update{branch_id}','Admin\BranchController@registerupdate');
});
Route::get('/viewdocument', 'CoAdmin\ViewDocumentController@addDocument');
Route::get('/viewdocument','CoAdmin\ViewDocumentController@registered');
Route::post('/addNewDocument', 'CoAdmin\ViewDocumentController@addNewDocument');
Route::get('/sentdocument', 'CoAdmin\ViewDocumentController@sentDocument');
Route::get('/receiveddocument', 'CoAdmin\ViewDocumentController@receiveddocument');
Route::get('/document-edit/{file_id}','CoAdmin\ViewDocumentController@registeredit');
Route::put('/document-register-update{file_id}','CoAdmin\ViewDocumentController@registerupdate');
