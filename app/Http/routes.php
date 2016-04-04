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

/******rutas de prueba******/
Route::get('auth/register',[ 
	'uses' => 'Auth\AuthController@getRegister',
	'as'  => 'auth.register',
	]);

Route::post('auth/register', 'Auth\AuthController@postRegister');
//ruta de registro envio de email
Route::get('auth/confirm/email/{email}/confirm_token/{confirm_token}', 'Auth\AuthController@confirmRegister');

//Rutas  login
Route::get('auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as'   => 'auth.login',
	]);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


/*************middleware para el resto de rutas***********/
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
	    	'uses'		=>	'ModuloDocentesController@getLogin',
	    	'as'		=> 	'docente.login'
	    ]);

	    Route::get('logout', [
	    	'uses'		=>	'ModuloDocentesController@getLogout',
	    	'as'		=> 	'docente.logout'
	    ]);

	    Route::post('acceso', [
	    	'uses'		=>	'ModuloDocentesController@getAcceso',
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
	    	'uses'	=> 'ModuloAlumnoController@destroy',
	    	'as'	=> 'alumnos.panel.destroy',
	    ]);
	  	
	    Route::get('login', [
	    	'uses'		=>	'ModuloAlumnoController@getLogin',
	    	'as'		=> 	'alumno.login'
	    ]);

	    Route::get('logout', [
	    	'uses'		=>	'ModuloAlumnoController@getLogout',
	    	'as'		=> 	'alumno.logout'
	    ]);

	    Route::post('acceso', [
	    	'uses'		=>	'ModuloAlumnoController@getAcceso',
	    	'as'		=> 	'alumno.acceso'
	    ]);
	    Route::resource('import', 'ImportController');
	    Route::get('import', [
	    	'uses'      => 'ImportController@import',
	    	'as'        => 'alumnos.createExcel'
	    ]); 
/*********************************************************
*********Rutas para el calendario************************/
		Route::resource('calendario', 'CalendarioController');
		Route::get('calendario',[
			'uses'	=> 'CalendarioController@evento',
			'as'	=> 'alumnos.calendario',

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

	/***********
	****grupo de rutas para el modulo docentes
	************/

	Route::get('docente/inicio', [
	'uses' => 'ModuloDocentesController@index',
	'as'   => 'docente.inicio',
	]);
	Route::get('docente/calificaciones', [
	'uses'	=> 'ModuloDocentesController@calificaciones',
	'as'	=> 'docente/calificaciones'

		]);
	Route::get('docente/tareas', [
		'uses'	=> 'ModuloDocentesController@tareas',
		'as'	=> 'Modulo.tareas',
		]);
	Route::get('docente/calendario', [
		'uses'	=> 'ModuloDocentesController@calendario',
		'as'	=> 'Modulo.calendario',
		]);
	Route::get('docente/asistencia', [
		'uses'	=> 'ModuloDocentesController@asistencia',
		'as'	=> 'Modulo.asistencia',
		]);
	Route::get('docente/alumno', [
		'uses'	=> 'ModuloDocentesController@alumnos',
		'as'	=> 'Modulo.alumnos',
		]);
	Route::get('docente/examenes', [
		'uses'	=> 'ModuloDocentesController@examenes',
		'as'	=> 'Modulo.examenes',
		]);
	Route::get('docente/tareasentregadas', [
		'uses'	=> 'ModuloDocentesController@tareasentregadas',
		'as'	=> 'Modulo.tareasentregadas',
		]);
	/***********
	****grupo de rutas para el modulo Alumnos
	************/
	Route::get('alumno/inicio', [
		'uses' => 'ModuloAlumnoController@index',
		'as'	=> 'Alumno.inicio',

	]);
	Route::get('alumno/calificaciones', [
		'uses'	=> 'ModuloAlumnoController@calificaciones',
		'as'	=> 'Modulo.calificaciones',
		]);
	
});
