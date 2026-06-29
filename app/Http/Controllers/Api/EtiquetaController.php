<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function index()
    {
        return response()->json(Etiqueta::all(), 200);
    }

    public function store(Request $request)
    {
        $etiqueta = Etiqueta::create($request->all());
        return response()->json($etiqueta, 201);
    }

    public function show($id)
    {
        $etiqueta = Etiqueta::find($id);
        if (!$etiqueta) return response()->json(['message' => 'No encontrado'], 404);
        return response()->json($etiqueta, 200);
    }

    public function update(Request $request, $id)
    {
        $etiqueta = Etiqueta::find($id);
        if (!$etiqueta) return response()->json(['message' => 'No encontrado'], 404);
        $etiqueta->update($request->all());
        return response()->json($etiqueta, 200);
    }

    public function destroy($id)
    {
        $etiqueta = Etiqueta::find($id);
        if (!$etiqueta) return response()->json(['message' => 'No encontrado'], 404);
        $etiqueta->delete();
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}