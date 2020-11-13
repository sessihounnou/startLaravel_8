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
Route::get('admin-auth', function () {
        return redirect('Gestion-admin');  
});
Route::get('', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});
Route::get('Admin', function () {
        return view('connexion');
});
Route::POST('admin-auth', function () {
        return view('validation');
});
Route::get('Gestion-admin', function () {
    return view('Gestion-admin');
});
Route::get('information-sur-la-salle', function () {
    return view('info-sur-la-salle');
});
Route::get('toutes-les-salles', function () {
    return view('toutes-les-salles');
});
Route::get('toutes-les-salles-disponibles', function () {
    return view('toutes-les-salles-disponibles');
});
Route::get('Add-salle', function () {
    return view('Add-salle');
});
Route::get('update', function () {
    return view('update');
});
Route::get('delete', function () {
    return view('delete');
});
Route::get('delete-salle-confirm', function () {
    return view('delete-salle-confirm');
});
Route::get('sup-effect', function () {
    return view('sup-effect');
});
Route::get('update-confirm', function () {
    return view('update-confirm');
});
Route::get('update-form', function () {
    return view('update-form');
});
Route::get('update-effect', function () {
    return view('update-effect');
});
Route::post('Add-salle-effect', function () {
    return view('Add-salle-effect');
});
Route::post('form_utilisateur', function () {
    return view('form_utilisateur');
});
Route::get('form_utilisateur', function () {
    return view('form_utilisateur');
});

