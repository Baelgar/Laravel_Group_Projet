<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Salle $salle)
    {
        return view('layouts.salle',['salle'=> $salle]);
    }

}
