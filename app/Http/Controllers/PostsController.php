<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

use App\Post;

class PostsController extends Controller
{
    public function index(){//este metodo va a retornar una vista

    	$posts = Post::orderby('id', 'desc')->paginate(5);

    	return view('posts.index')->with(['posts' =>$posts]);//una buena practica es tener las vistas de un controlador dentro de un directorio donde el directorio tenga el mismo nombre del controlador y la vista tenga el mismo nombre del metodo
    }
    public function show(Post $post){

    	/*$post = Post::find($postId);
		Esto es lo mismo que agregar la clase directamente en el parametro
		sirve para ahorrar codigo
    	if(is_null($post)){
    		abort(404);
    	}*/

    	return view('posts.show')->with(['post' =>$post]);
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(CreatePostRequest $request){
        
        /*$post = new Post;
        $post->title = $request->get('title');
        $post->descripcion = $request->get('descripcion');
        $post->url = $request->get('url');
        $post->save();Podemos hacer lo mismo con la linea de codigo siguiente:*/
        $post = Post::create($request->only('title', 'descripcion', 'url'));
        return redirect()->route('posts_path');
    }
    public function edit(Post $post){


        return view('posts.edit')->with(['post' =>$post]);
    }
    public function update(Post $post, UpdatePostRequest $request){
        /*$post->title = $request->get('title');
        $post->descripcion = $request->get('descripcion');
        $post->url = $request->get('url');
        $post->save();   Esto es lo mismo que el siguiente codigo */
        $post->update(
            $request->only('title','descripcion','url')
        );

        return redirect()->route('post_path',['post' => $post->id]);

    }
    public function delete(Post $post){
        $post->delete();

        return redirect()->route('posts_path');
    }

}
