<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        return response()->json(Comentario::with(['user', 'post'])->get(), 200);
    }

    public function store(Request $request)
    {
        $comentario = Comentario::create($request->all());
        return response()->json($comentario, 201);
    }

    public function show($id)
    {
        $comentario = Comentario::find($id);
        if (!$comentario) return response()->json(['message' => 'No encontrado'], 404);
        return response()->json($comentario, 200);
    }

    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id);
        if (!$comentario) return response()->json(['message' => 'No encontrado'], 404);
        $comentario->update($request->all());
        return response()->json($comentario, 200);
    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        if (!$comentario) return response()->json(['message' => 'No encontrado'], 404);
        $comentario->delete();
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}