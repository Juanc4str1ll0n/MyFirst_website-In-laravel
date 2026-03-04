<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        // Obtenemos el usuario autenticado
        $user = auth()->user();

        // Traemos sus posts más recientes y paginamos
        $posts = $user->posts()
                      ->latest()
                      ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Mostrar formulario para crear un post
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Guardar un post nuevo
     */
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $data = $request->validate([
            'title' => 'required|string|max:150',
            'slug' => 'required|string|max:150|unique:posts,slug',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        // Creamos el post usando el usuario autenticado
        auth()->user()->posts()->create($data);

        return redirect()->route('posts.index')
                         ->with('success', 'Post creado correctamente.');
    }

    /**
     * Mostrar un post específico
     */
    public function show(Post $post)
    {
        // Si quieres, aquí podrías chequear que el post pertenece al usuario
        if ($post->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        return view('posts.show', compact('post'));
    }

    /**
     * Mostrar formulario de edición de un post
     */
    public function edit(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Actualizar un post
     */
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        $data = $request->validate([
            'title' => 'required|string|max:150',
            'slug' => "required|string|max:150|unique:posts,slug,{$post->id}",
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        $post->update($data);

        return redirect()->route('posts.index')
                         ->with('success', 'Post actualizado correctamente.');
    }

    /**
     * Eliminar un post
     */
    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }

        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post eliminado correctamente.');
    }
}