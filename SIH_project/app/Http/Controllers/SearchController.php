<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class SearchController extends Controller
{
    public function search(Request $request)
{
   $q=$request->input('university');
   $r=$request->input('city');
   
   $univ=University::where('uname','LIKE','%'.$q.'%')->where('city','LIKE','%'.$r.'%')->get();
   //$city=University::all();
 return view('search',compact('univ'));
}
}