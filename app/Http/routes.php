<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
   
	/**
	 * Grupo de rutas para el administrador
	 */

	Route::group(['prefix' => 'admin'], function () {
	    Route::resource('panel', 'AdminsController');

	    Route::get('admins/{id}/destroy', [
	    	'uses'	=> 'AdminsController@destroy',
	    	'as'	=> 'admins.panel.destroy',
	    ]);
	    
	    Route::get('login', [
	    	'uses'		=>	'AdminsController@getLogin',
	    	'as'		=> 	'admin.login'
	    ]);

	    Route::get('logout', [
	    	'uses'		=>	'AdminsController@getLogout',
	    	'as'		=> 	'admin.logout'
	    ]);

	    Route::post('acceso', [
	    	'uses'		=>	'AdminsController@getAcceso',
	    	'as'		=> 	'admin.acceso'
	    ]);
	    /*Route::get('profile', 'AdminsController@profile');
		Route::post('updateprofile', 'AdminsController@updateProfile');*/
		/*Route::resource('profile', 'AdminsController');
	    Route::get('profile', [
	    	'uses'      => 'AdminsController@import',
	    	'as'        => 'admin.profile'
	    	]); */
	     Route::resource('profile', 'ImportController');
	     Route::get('profile', [
	    	'uses'      => 'ImportController@profile',
	    	'as'        => 'admin.profile'
	    	]); 
	    Route::resource('profile', 'ImportController');
	    Route::post('updateprofile', [
	    	'uses'      => 'ImportController@updateProfile',
	    	'as'        => 'admin.updateprofile'
	    	]); 
	});

	/**
	 * Grupo de rutas para el docente
	 */

	Route::group(['prefix' => 'docente'], function () {
	    Route::resource('panel', 'DocentesController');
	    
	    Route::get('login', [
	    	'uses'		=>	'DocentesController@getLogin',
	    	'as'		=> 	'docente.login'
	    ]);

	    Route::get('logout', [
	    	'uses'		=>	'DocentesController@getLogout',
	    	'as'		=> 	'docente.logout'
	    ]);

	    Route::post('acceso', [
	    	'uses'		=>	'DocentesController@getAcceso',
	    	'as'		=> 	'docente.acceso'
	    ]);
	    
	});
	Route::group(['prefix' => 'docente'], function () {
	    Route::resource('panel', 'DocentesController');

	    Route::get('Docentes/{id}/destroy', [
	    	'uses'	=> 'DocentesController@destroy',
	    	'as'	=> 'Docentes.panel.destroy',
	    ]);
	    
	});


	/**
	 * Grupo de rutas para la institución
	 */

	Route::group(['prefix' => 'institucion'], function () {
	    Route::resource('panel', 'InstitucionesController');

	    Route::get('institucion/{id}/destroy', [
	    	'uses'	=> 'InstitucionesController@destroy',
	    	'as'	=> 'institucion.panel.destroy',
	    ]);
	    
	});

	/**
	 * Grupo de rutas para los grupos
	 */

	Route::group(['prefix' => 'grupo'], function () {
	    Route::resource('panel', 'GruposController');    

	    Route::get('grupo/{id}/destroy', [
	    	'uses'	=> 'GruposController@destroy',
	    	'as'	=> 'grupo.panel.destroy',
	    ]);
	    
	});

	/**
	 * Grupo de rutas para las materias
	 */

	Route::group(['prefix' => 'materia'], function () {
	    Route::resource('panel', 'MateriasController');

	    Route::get('materia/{id}/destroy', [
	    	'uses'	=> 'MateriasController@destroy',
	    	'as'	=> 'materia.panel.destroy',
	    ]);    
	    
	});


	/**
	 * Grupo de rutas para el alumno
	 */

	Route::group(['prefix' => 'alumno'], function () {
	    Route::resource('panel', 'AlumnosController');
	    Route::get('alumnos/{id}/destroy', [
	    	'uses'	=> 'AlumnosController@destroy',
	    	'as'	=> 'alumnos.panel.destroy',
	    ]);
	  	
	    Route::get('login', [
	    	'uses'		=>	'AlumnosController@getLogin',
	    	'as'		=> 	'alumno.login'
	    ]);

	    Route::get('logout', [
	    	'uses'		=>	'AlumnosController@getLogout',
	    	'as'		=> 	'alumno.logout'
	    ]);

	    Route::post('acceso', [
	    	'uses'		=>	'AlumnosController@getAcceso',
	    	'as'		=> 	'alumno.acceso'
	    ]);
	    Route::resource('import', 'ImportController');
	    Route::get('import', [
	    	'uses'      => 'ImportController@import',
	    	'as'        => 'alumnos.createExcel'
	    	]); 
	    
	 
	});
	Route::group(['prefix' => 'admin'], function () {
  	    Route::resource('paneladmin', 'AdminsController');
  	    Route::get('Admins/{id}/destroy', [
  	    	'uses'	=> 'AdminsController@destroy',
  	    	'as'	=> 'Admins.panel.destroy',
  	    	]); 
  	    
  	});

	/**
	 * Grupo de rutas para las graficas
	 */

	Route::group(['prefix' => 'grafica'], function () {
	    Route::resource('panel', 'GraficaController');

	    Route::get('Grafica/{id}/destroy', [
	    	'uses'	=> 'GraficaController@destroy',
	    	'as'	=> 'Grafica.panel.destroy',
	    ]);
	    
	});



	/**
	 * Grupo de rutas para las ficha de estudio
	 */

	Route::group(['prefix' => 'ficha'], function () {
	    Route::resource('panel', 'FichasController');

	    Route::get('Fichas/{id}/destroy', [
	    	'uses'	=> 'FichasController@destroy',
	    	'as'	=> 'Fichas.panel.destroy',
	    ]);

		Route::get('getRequest', 'FichasController@getRespuesta');
		
		Route::get('/{id}/detalles', [
	    	'uses'	=> 'FichasController@getDetalles',
	    	'as'	=> 'fichas.panel.detalles',
	    ]);
		//Route::get('detalles/{id}', 'FichasController@getDetalles');
	    //ficha/panel/{panel}/edit
	});

	/**
	 * Grupo de rutas para los examenes
	 */

	Route::group(['prefix' => 'examen'], function () {
	    Route::resource('panel', 'ExamenesController');

	    Route::get('Examenes/{id}/destroy', [
	    	'uses'	=> 'ExamenesController@destroy',
	    	'as'	=> 'Examenes.panel.destroy',
	    ]);
	    
	});

	/**
	 * Grupo de rutas para las preguntas
	 */

	Route::group(['prefix' => 'pregunta'], function () {
	    Route::resource('panel', 'PreguntasController');

	    Route::get('Preguntas/{id}/destroy', [
	    	'uses'	=> 'PreguntasController@destroy',
	    	'as'	=> 'Preguntas.panel.destroy',
	    ]);
	    
	});

});