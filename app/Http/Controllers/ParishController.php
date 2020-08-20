<?php

namespace App\Http\Controllers;

use App\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function showAllParishes(){
        return response()->json(Parish::all());
    }

    public function showOneParish($id){
        return response()->json(Parish::find($id));
    }

    public function create(Request $request){
        //walidacja
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'metropolis' => 'required',
            'street' => 'required',
            'postal' => 'required',
            'city' => 'required',
            'rector' => 'required'
        ]);
        //dodanie rekordu
        $parish = Parish::create($request->all());
        return response()->json($parish, 201);
    }

}
