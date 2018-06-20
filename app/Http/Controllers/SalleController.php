<?php

namespace App\Http\Controllers;
use App\Forfait;
Use App\Salle;
use Illuminate\Http\Request;
use  auth;

class SalleController extends Controller
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
        return view('layouts.salle');
    }

    public  function liste()
    {
        $salle = Salle::all();

        $forfaits =  Forfait::all();


        return view('salle.index' ,['sale' =>$salle, 'forfaits' => $forfaits]);
    }

    public  function  create ()
    {
        $salle = Salle::all();
        $user = Auth::user() ;
        $salle->user_id = $user->id;
        $forfaits =  Forfait::all();


        return view('salle.index' ,['sale' =>$salle, 'forfaits' => $forfaits]);


    }


    public  function  delete( Request $request, Salle $salle)
    {

        $list = Salle::findOrFail($salle->id);
        $list->delete();
        return redirect()->back();
    }
}
