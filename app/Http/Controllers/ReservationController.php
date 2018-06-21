<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(Request $request, Salle $salle)
    {
        return view('layouts.reservation',['salle'=> $salle]);
    }
}
