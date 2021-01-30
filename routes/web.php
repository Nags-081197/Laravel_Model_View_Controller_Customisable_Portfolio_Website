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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
    
Route::get('/aboutme', 'PagesController@aboutme');

Route::get('/skills', 'PagesController@skills');

Route::get('/blog', 'PagesController@blog');

Route::get('/portfoliopage', 'PagesController@portfoliopage');

Route::get('/experience', 'PagesController@experience');

Route::get('/hireme', 'PagesController@hireme');

Route::get('/contact', 'PagesController@contact');

Route::get('/customize', 'PagesController@customize');

Route::get('/logout', 'PagesController@getLogout')->name('logout');

Route::post('/r', 'CustomAuthController@signup')->name('customregister');

Route::post('/l', 'CustomAuthController@login')->name('customlogin');

Route::post('/ho', 'CustomizePageController@customizehomepageupdate')->name('customizehomepageupdate');

Route::post('/a', 'CustomizePageController@customizeaboutmeupdate')->name('customizeaboutmeupdate');

Route::post('/s', 'CustomizePageController@customizeskillsupdate')->name('customizeskillsupdate');

Route::post('/e', 'CustomizePageController@customizeexperienceupdate')->name('customizeexperienceupdate');

Route::post('/ea', 'CustomizePageController@customizeexperienceadd')->name('customizeexperienceadd');

Route::post('/ed', 'CustomizePageController@customizeexperiencedelete')->name('customizeexperiencedelete');

// Route::post('/', 'CustomizePageController@customizeskillsupdate')->name('customizeskillsupdate');

Route::post('/p', 'CustomizePageController@customizeportfoliopageupdate')->name('customizeportfoliopageupdate');

Route::post('/pa', 'CustomizePageController@customizeportfoliopageadd')->name('customizeportfoliopageadd');

Route::post('/pd', 'CustomizePageController@customizeportfoliopagedelete')->name('customizeportfoliopagedelete');

Route::post('/h', 'CustomizePageController@customizehiremeupdate')->name('customizehiremeupdate');

Route::post('/ha', 'CustomizePageController@customizehiremeadd')->name('customizehiremeadd');

Route::post('/hd', 'CustomizePageController@customizehiremedelete')->name('customizehiremedelete');

Route::post('/c', 'CustomizePageController@customizecontactupdate')->name('customizecontactupdate');

Route::post('/ua', 'CustomizePageController@customizeuseradd')->name('customizeuseradd');

Route::post('/ud', 'CustomizePageController@customizeuserdelete')->name('customizeuserdelete');

Route::post('/', 'PagesController@hitmeup')->name('hitmeup');










Auth::routes();










Route::get('/home', 'HomeController@index')->name('home');
