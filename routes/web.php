<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


// Route::get('/posts/{post}/{category?}', function ($post, $category=null) {
//     if ($category){
//         return "Aquí se mostrará el post: $post, de la categoría: $category";
//     }

//     return "Aquí se mostrará el post: $post";
// });


Route::get('prueba', function(){
    /*
    // Crear un registro
    $post = new Post;

    $post->title = 'Título de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->category = 'Categoría de prueba 3';

    $post->save();

    return $post;
    */

    /* Actualizar registro
    //$post = Post::find(1);
    $post = Post::where('title', "Título de prueba 2")->first();
    $post->category = 'Desarrollo Web';
    $post->save();

    return $post;
     */


    //$post = Post::all();

    /* Listar registros
    // Para traer todos los posts con ids mayores o iguales que 2
    //$post = Post::where('id', '>=', '2')->get();
    $post = Post::orderBy('id', 'desc')
        ->select('id', 'title', 'category')
        ->take(2)
        ->get();

    return $post;
    */

    /* Eliminar registro
    $post = Post::find(1);
    $post->delete();

    return "Post eliminado";
    */
});
