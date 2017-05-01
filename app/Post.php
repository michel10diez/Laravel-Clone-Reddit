<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
	//Post => posts si no se especifica la tabla laravel va a intentar buscar la tabla que tenga el mismo nombre que el modelo, pero en plural

	protected $table = 'posts';

	protected $fillable = ['title', 'descripcion', 'url'];

	 
}