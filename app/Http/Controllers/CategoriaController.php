<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function showAll()
    {
        return response()->json(Categoria::all());
    }

    public function showOne($id)
    {
        return response()->json(Categoria::find($id));
    }

    public function create(Request $request)
    {
        $author = Categoria::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Categoria::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Categoria::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
