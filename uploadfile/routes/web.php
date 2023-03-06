<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
Route::resource('files' , UploadController::class,[
      'names'=> [
   'create'=>'files.create',
   'store'=>'files.store',
   'index'=>'files.index',
   'edit'=>'files.edit',
   'update'=>'files.update',
  'destroy'=>'files.destroy'
       ] ]
);

// Route::get('/post' ,function(){

//     Storage::disk('files')->put('text.txt', 'contents');
//     return "ok";

//     });


    Route::get('/' ,function(){

        return view('welcome');


        });
