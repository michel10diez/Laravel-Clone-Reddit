<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){//este metodo va a retornar una vista
    	return view('posts.index');//una buena practica es tener las vistas de un controlador dentro de un directorio donde el directorio tenga el mismo nombre del controlador y la vista tenga el mismo nombre del metodo
    }
    public function show($id){
    	return view('posts.show');
    }

}
