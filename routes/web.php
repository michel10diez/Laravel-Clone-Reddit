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

Route::get('/posts', 'PostsController@index');

/*Si queremos crear una ruta para poder ver un post en especifico*/
Route::get('/posts/{id}', 'PostsController@show');



Route::get('/', function () {
    return view('welcome', ['nombre' => 'Michel']);
});

// /hola => 'hola!' GET
/*Route::get('/hola/{nombre}', function() {//clouser que contentra el codigo que se ejecutara(clouser = funcion anonima)
	//ruta estatica
	return 'hola!';
	//para hacer ruta dinamica solo hay que agregar una variable a la parte que queremos que sea dinamica

});*/

// /hola/<nombre> => 'Hola <nombre>' GET

/*Route::get('/hola/{nombre}', function($nombre) {//una buena practica es colocarle el mismo nombre que se le puso en la seccion de la ruta(puede ser cualquier nombre)
	//ruta estatica
	return "hola! {$nombre}";
	//para hacer ruta dinamica solo hay que agregar una variable a la parte que queremos que sea dinamica

});*/
/*---IMPORTANTE USAR CLOUSER EN LAS RUTAS HACE QUE EL ARCHIVO WEB.PHP SE VUELVA MUY GRANDE CON CODIGO QUE NO ES SOLO
CON RUTAS. ESTE ARCHIVO DEBERIA SER SOLO PARA PODER CONECTAR RUTAS CON CODIGO
ES POR ESTO QUE ADEMAS DE USAR CLOUSER PODEMOS USAR CONTROLADORES PARA DEFINIR QUE CODIGO 
VA EJECUTAR UNA RUTA */
Route::get('/hola/{nombre}', 'HolaController@hola');//llamamos a la ruta hola/con una ruta dinamica y despues el metodo 'hola' de el controlador HolaController
