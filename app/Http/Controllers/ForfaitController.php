<?php

namespace App\Http\Controllers;
use App\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
  public  function index()
  {


      $forfaits =  Forfait::all();

      return view('forfait.index' ,['forfaits' => $forfaits]);
  }

  public  function  create (Request $request)
  {

      $forfait =  new Forfait;
      $forfait->name =$request['inputname'];
      $forfait->prix = $request['inputprix'];
      $forfait->save();
      return redirect()->back();
  }


  public  function  delete( Request $request, Forfait $forfait)
  {

      $list = Forfait::findOrFail($forfait->id);
      $list->delete();
      return redirect()->back();
  }

  public  function update( Request $request, Forfait $forfait)
  {


      return view('forfait.index' ,['forfaits' => $forfaits]);

  }

}
