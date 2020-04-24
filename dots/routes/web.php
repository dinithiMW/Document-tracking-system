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
    //return view('auth.login');
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']],function(){
 
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','Admin\DashboardController@registered');
    //Route::get('/branch', 'Admin\BranchController@branch');
    //Route::post('/addNewBranch', 'Admin\BranchController@addNewBranch');
   // Route::get('/branch', 'Admin\BranchController@registered');
   // Route::get('/document', 'Admin\DocumentController@addDocument');
    //Route::post('/addNewDocument', 'Admin\DocumentController@addNewDocument');
    Route::get('/document','Admin\DocumentController@registered');
   // Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update{id}','Admin\DashboardController@registerupdate');
   // Route::get('/branch-edit/{branch_id}','Admin\BranchController@registeredit');
   // Route::put('/branch-register-update{branch_id}','Admin\BranchController@registerupdate');
   // Route::delete('branch-delete/{branch_id}','Admin\BranchController@delete');
    Route::delete('role-delete/{id}','Admin\DashboardController@delete');
    Route::get('/document-edit/{file_id}','Admin\DocumentController@edit');
    Route::delete('file-delete/{id}','Admin\DocumentController@delete');
    Route::get('/document','Admin\DocumentController@registeredscan');
    Route::get('/registerAdmin','Admin\DashboardController@registeredAdmin');
    
    Route::get('/dashboard','Admin\DashboardController@registeredbarcode');
   

    
    
});
Route::get('/viewdocument', 'CoAdmin\ViewDocumentController@addDocument');
Route::get('/viewdocument','CoAdmin\ViewDocumentController@registered');
Route::post('/addNewDocument', 'CoAdmin\ViewDocumentController@addNewDocument');
Route::get('/sentdocument', 'CoAdmin\ViewDocumentController@sentDocument');
Route::get('/receiveddocument', 'CoAdmin\ViewDocumentController@receiveddocument');
Route::get('/document-edit/{file_id}','CoAdmin\ViewDocumentController@registeredit');
Route::put('/document-register-update{file_id}','CoAdmin\ViewDocumentController@registerupdate');
Route::post('/scanbarcode', 'CoAdmin\ViewDocumentController@scanBarcode');

Route::post('/scanDocument', 'CoAdmin\ViewDocumentController@scand');
//Route::get('/home','CoAdmin\ViewDocumentController@registeredscan');
Route::get('/changeProfile/{id}','CoAdmin\ViewDocumentController@changeProfile');
Route::put('/profile-register-update{id}','CoAdmin\ViewDocumentController@profileupdate');
Route::get('/search', 'CoAdmin\ViewDocumentController@search');
Route::get('/searchDetail', 'CoAdmin\ViewDocumentController@search');
Route::get('/searchFile', 'CoAdmin\ViewDocumentController@searchFile');

Route::get('/home','CoAdmin\ViewDocumentController@scanfile');
Route::get('/sendemail','SendEmailController@index');
Route::post('/sendemail/send','SendEmailController@send');

Route::get('/chart', 'CoAdmin\ViewDocumentController@chart');



