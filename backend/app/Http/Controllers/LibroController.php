<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(Request $request)
    {
        $query = Libro::with('autor');

        if ($request->has('autor_id')) {
            $query->where('autor_id', $request->autor_id);
        }

        return response()->json($query->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'anio_publicacion' => 'required|integer',
            'autor_id' => 'required|exists:autores,id',
        ]);

        $libro = Libro::create($request->all());
        return response()->json($libro, 201);
    }
}
