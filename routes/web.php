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

	/*===================================
	=            admin routs            =
	===================================*/
	Auth::routes();
	Route::group(['middleware' => ['web','admin']], function() {
		Route::get('adminpanel', 'AdminController@index');
		Route::resource('adminpanel/users', 'UserController');
		Route::get('adminpanel/users/{id}/delete', 'UserController@destroy');


		#site setting
		Route::get('adminpanel/sitesetting', 'SiteSettingController@index');
		Route::post('adminpanel/sitesetting', 'SiteSettingController@store');
		#users
		Route::resource('adminpanel/bu', 'BuController'); 
		Route::get('adminpanel/bu/{id}/delete', 'BuController@destroy');
		#contact
		Route::resource('adminpanel/contact', 'ContactController'); 
		Route::get('adminpanel/contact/{id}/delete', 'ContactController@destroy');
		Route::get('adminpanel/contact/{id}/view', 'ContactController@view');

		Route::get('adminpanel/users/{id}/enable', 'BuController@enable');

        Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);

	});



	/*=====  End of admin routs  ======*/



	/*===================================
	=            guest  routes            =
	===================================*/
	Route::get('/', function () {
		return view('welcome');
	});
		  Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/showallenable', 'BuController@showallenable');
	Route::get('/forrent', 'BuController@forrent');
	Route::get('forbuy', 'BuController@forbuy');
	Route::get('type/{type}', 'BuController@ShowByType');
	Route::get('search', 'BuController@search');
	Route::get('ShowBild/{id}', 'BuController@ShowBild');
	Route::get('/ajax/bu/information', 'BuController@GetAjaxInto');
	Route::get('/contact', 'HomeController@contact');
	Route::post('/contact/store', 'ContactController@store');

	/*=====  End of guest  routes  ======*/


   /*===================================
   =            user routes            =
   ===================================*/


   Route::group(['middleware' => ['auth']], function() {

   	Route::get('/users/create/bu', 'BuController@UserAddView');
   	Route::post('/users/create/bu', 'BuController@UserStore');
   	Route::get('/user/bu/show', 'BuController@ShowUserBu');
   	Route::get('/user/editsetting', 'UserController@EditSetting');
   	Route::patch('/user/editsetting', 'UserController@UpdateEditSetting');
   	Route::get('/user/edit/bu/{id}', 'BuController@EditUserBu');
   	Route::post('/user/update/bu/{id}', 'BuController@UpdateUserBu');


   });



   /*=====  End of user routes  ======*/ 



