<?php

use Illuminate\Support\Facades\Route;
use App\gallerylaravel;
use Illuminate\Http\Request;

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


Route::resource('product', 'ProductController');

Route::post('them_du_lieu',[
    'as' => 'them_du_lieu',
    'uses' => 'login@postthem_du_lieu'
]);

Route::delete('/delete_img/{delete_img}',[
    'as' => 'delete-img',
    'uses' => 'login@delete_du_lieu_img'
]);

Route::get('edit/{id}', [
    'as' => 'edit',
    'uses' => 'login@update_edit'
]);

Route::PATCH('update/{id}', 'login@sua_du_lieu');





