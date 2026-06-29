<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::with(['user', 'categoria', 'etiquetas'])->get(), 200);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function show($id)
    {
        $post = Post::with(['comentarios', 'etiquetas'])->find($id);
        if (!$post) return response()->json(['message' => 'No encontrado'], 404);
        return response()->json($post, 200);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) return response()->json(['message' => 'No encontrado'], 404);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) return response()->json(['message' => 'No encontrado'], 404);
        $post->delete();
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}