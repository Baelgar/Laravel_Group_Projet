<?php

namespace App\Http\Controllers;
use App\Forfait;
Use App\Salle;
use Illuminate\Http\Request;
use  auth;
use Illuminate\Support\Facades\Input;

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
        $salles = Salle::all();

        $forfaits =  Forfait::all();

        return view('salle.index' ,['salles' =>$salles, 'forfaits' => $forfaits]);
    }

    public  function  create (Request $request)
    {
        $user =Auth::user();
        //dd($request->all());
        $salle =  new Salle;
        $salle->user_id =$user->id;
        $salle->name =$request['inputname'];
        $salle->city =$request['inputville'];
        $salle->address =$request['inputAddress'];
        $salle->postalCode =$request['inputCP'];
        $salle->prix = $request['inputprix'];
        $salle->forfait_id = $request['inputForfait'];
        $salle->nombrePlace = $request['inputPlace'];
        $salle->save();
        return redirect()->back();
    }


    public  function  delete( Request $request, Salle $salle)
    {

        $list = Salle::findOrFail($salle->id);
        $list->delete();
        return redirect()->back();
    }
}
