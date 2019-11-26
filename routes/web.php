<?php
use App\etudiants;
use Illuminate\Support\Facades\Input;

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
Route::resource('student', 'StudentController');

/*Route::get('/search','EtudiantController@search');
Route::get('/etudiant','EtudiantController@newEtudiant');
Route::get('/etudiants','EtudiantController@listEtudiant');
Route::get('/create','EtudiantController@create');

Route::get('/store','EtudiantController@store');
Route::get('/index','EtudiantController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('acceuil',function(){
    return view('acceuil');
});*/

