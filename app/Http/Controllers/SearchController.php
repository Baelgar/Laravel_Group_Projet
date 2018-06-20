<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function getData(Request $request)
    {
//        $method = Request::method();

//        if (Request::isMethod('post'))
//        {
            dd($request['emplacement']);
            dd($request['fromDate']);
            dd($request['toDate']);
            exit;
//        }
    }
}
