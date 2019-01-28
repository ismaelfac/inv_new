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


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('/');
Route::get('welcometoregistre', function () {
    return view('emails.welcome');
})->name('bienvenido')->middleware('verified');
Route::get('sobre-nosotros', 'HomeController@about')->name('about');
Route::get('marca', 'HomeController@brand')->name('marca');
Route::get('propiedades', 'HomeController@properties')->name('properties');
Route::get('blog', 'HomeController@blog')->name('blog');
Route::resource('contactenos', 'ContactController');
Route::get('getProperties/{per_page}', 'PropertyController@getProperties');


Route::middleware(['auth', 'verified'])->group(function () {
    //parameters
    Route::resource('countries', 'Parameters\CountryController')->middleware('has.permission:countries.index');
    Route::resource('departaments', 'Parameters\DepartamentController')->middleware('has.permission:departaments.index');
    Route::resource('municipalities', 'Parameters\MunicipalityController')->middleware('has.permission:municipalities.index');
    Route::resource('locations', 'Parameters\LocationController')->middleware('has.permission:locations.index');
    Route::resource('neighborhoods', 'Parameters\NeighborhoodController')->middleware('has.permission:neighborhoods.index');
    //modules
    Route::resource('users', 'UserController')->middleware('has.permission:users.index');
    Route::resource('roles', 'RoleController')->middleware('has.permission:roles.index');
    Route::resource('permissions', 'PermissionController')->middleware('has.permission:permissions.index');
    Route::resource('clients', 'ClientController')->middleware('has.permission:clients.index');
    Route::resource('properties', 'PropertyController')->middleware('has.permission:properties.index');
    Route::resource('galleries', 'GalleryController')->middleware('has.permission:galleries.index');
    Route::resource('owner', 'OwnerPropertiesController')->middleware('has.permission:owner.index');
    Route::get('panel', function () {
        return view('admin2.content');
    })->middleware('has.permission:parameters');
});