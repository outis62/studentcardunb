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
    return view('login');
})->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('studentCARD');

/*enregistrer etudiant*/
Route::post('ajouter-etudiant', 'EtudiantsController@store');
Route::get('nouveau-enregistrement','EtudiantsController@forme');
Route::get('etudiant', 'EtudiantsController@index');
Route::get('carte', 'EtudiantsController@card');
Route::get('vue/{id}', 'EtudiantsController@vuecard');

/*enregistrer */
Route::post('ajouter-cycle', 'CyclesController@store');
Route::post('ajouter-filiere', 'FilieresController@store');
Route::post('ajouter-nationalite', 'NationalitesController@store');
Route::post('ajouter-anneeUniversitaire', 'AnneeUniversitairesController@store');
Route::get('nouveau-cycle','CyclesController@create');
Route::get('nouveau-filiere','FilieresController@create');
Route::get('nouveau-nationalite','NationalitesController@create');
Route::get('nouveau-anneeUniversitaire','AnneeUniversitairesController@create');


