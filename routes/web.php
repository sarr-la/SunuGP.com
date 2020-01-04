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

Route::get("/showController/{slug}", "showController@show");

Route::get("/backoffice", "showController@show");

/*Route::get("/", function(){
    return view("Home");
});
*/
Route::get('/', "HomeController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route::get('client',"clientController@client");


Route::get('/client', 'clientController@client');

Route::get('/client/create','clientController@create')->name('create_client');
Route::post('/client/create','clientController@store')->name('store_client');
Route::get('client/ajouter','clientController@ajout')->name("ajouter_client");


Route::get('/Clients','ClientsController@Clients')->name('Clients');
Route::get('/Clients/create','ClientsController@create')->name('create_Clients');
Route::post('Clients/create','ClientsController@store')->name('store_Clients');


Route::get('Clients/{id}/edit','ClientsController@edit')->name("editer_Clients");

Route::patch('Clients/{id}/edit', 'ClientsController@update')->name('update_Clients');

Route::get('Clients/{id}/suprimer','ClientsController@suprimer')->name("suprimer_Clients");




Route::get('/trajet', 'trajetController@trajet');

Route::get('/trajet/create','trajetController@create')->name('create_trajet')->middleware('auth');
Route::post('/trajet/create','trajetController@store')->name('store_trajet');
Route::get('trajet/ajouter','trajetController@ajout')->name("ajouter_trajet");


Route::get('/Trajets','TrajetsController@Trajets')->name('Trajets');
Route::get('/Trajets/create','TrajetsController@create')->name('create_Trajets')->middleware('auth');
Route::post('Trajets/create','TrajetsController@store')->name('store_Trajets');


Route::get('trajets/{id}/edit','TrajetsController@edit')->name("editer_Trajets");

Route::patch('Trajets/{id}/edit', 'TrajetsController@update')->name('update_Trajets');

Route::get('Trajets/{id}/suprimer','TrajetsController@suprimer')->name("suprimer_Trajets");

Route::delete('Trajets/{id}', 'TrajetsController@destroy');






Route::get('/reservation', 'reservationController@reservation');

Route::get('/reservation/create','reservationController@create')->name('create_reservation');
Route::post('/reservation/create','reservationController@store')->name('store_reservation');
Route::get('/reservation/ajouter','reservationController@ajout')->name("ajouter_reservation");


Route::get('/Reservations','ReservationsController@Reservations')->name('Reservations');
Route::get('/Reservations/create','ReservationsController@create')->name('create_Reservations');
Route::post('Reservations/create','ReservationsController@store')->name('store_Reservations');


Route::get('reservations/{id}/edit','ReservationsController@edit')->name("editer_Reservations");

Route::patch('Reservations/{id}/edit', 'ReservationsController@update')->name('update_Reservations');

Route::get('Reservations/{id}/suprimer','ReservationsController@suprimer')->name("suprimer_Reservations");

Route::post('/ajout_reservation', 'AjaxController@ajout_reservation');




Route::get('/abonnement/expired', "AbonnementController@expired");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/Contact', 'ContactController@Contact');
Route::get('/Contact/create','ContactController@create')->name('create_Contact');
Route::post('Contact/create','ContactController@store')->name('store_Contact');
Route::get('/Contact/ajouter','ContactController@ajout')->name("ajouter_Contact");


Route::get('/information', 'InformationControler@information')->name("information");