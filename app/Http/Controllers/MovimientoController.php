<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{

    public function showAll()
    {
        return response()->json(Movimiento::all());
    }

    public function showOne($id)
    {
        return response()->json(Movimiento::find($id));
    }

    public function create(Request $request)
    {
        $author = Movimiento::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Movimiento::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Movimiento::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
