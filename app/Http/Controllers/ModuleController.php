<?php

namespace App\Http\Controllers;
use App\Module;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
  public  function index()
  {
      $modules =  Module::all();
      return view('module.index' ,['modules' => $modules]);
  }

  public  function  create (Request $request)
  {
      $module =  new Module;
      $module->name =$request['inputname'];
      $module->prix = $request['inputprix'];
      $module->save();
      return redirect()->back();
  }


  public  function  delete( Request $request, Module $module)
  {
      $list = Module::findOrFail($module->id);
      $list->delete();
      return redirect()->back();
  }

}
