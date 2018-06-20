<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User as User;
use App\Reservation as Reservation;

class RapportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
//        var_dump($user);

        $listeReservation = Reservation::where('user_id','=',$user->id)->get();

        return view('rapports.rapport',['user'=>$user,'listeReservations'=>$listeReservation]);
    }

    public function generatePDF(Request $requete, User $user){

        return redirect()->back();
    }
}