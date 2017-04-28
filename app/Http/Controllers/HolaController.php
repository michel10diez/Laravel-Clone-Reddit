<?php


namespace App\Http\Controllers;//todos los controladores en laravel extienden del controlador base que es Controllers


//todas las clases de laravel tienen namespace lo cual lo hace muy conveniente al momento de tener clases que tienen el mismo nombre pero estan en namespaces diferentes
class HolaController extends Controller {

	/*vamos a creear el metodo que va a responder a la ruta*/
	public function hola($nombre){//al igual que los clouser los controladores van a recibir como parametros las diferentes partes dinamicas de la url
		
		return "Hola desde controller! {$nombre}";
	}

}