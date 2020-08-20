<?php

namespace App\Http\Controllers;

use App\Metropolises;
use Illuminate\Http\Request;

class MetropolisesController extends Controller
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

    public function showAllMetropolises(){
        return response()->json(Metropolises::all());
    }

}
