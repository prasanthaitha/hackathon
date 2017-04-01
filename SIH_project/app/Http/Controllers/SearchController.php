<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Ucategory;

	

class SearchController extends Controller


{

	public $univ;

		    public function search(Request $request)
		{
		   $q=$request->input('university');
		   $r=$request->input('city');
		  // {{config('global.univ')}}
		   $univ=University::where('uname','LIKE','%'.$q.'%')->where('city','LIKE','%'.$r.'%')->get();
		   //$city=University::all();
		 return view('search',compact('univ'));

		 return $this->filter(compact('univ'));
		  
		}


		public function filter(Request $request,$univ)
		{   

		     $key=$request->category;

		     //return $key;
		//return view('search1',compact('key'));


		     switch($key)
		       {

		   case 1:
		        /*   $u=Ucategory::where('category','=','Engineering')->where('')->get();
		          return view('search1',compact('u'));
		          break;
		           case 2:
		           $u=Ucategory::where('category','=','Medical')->get();
		            break;
		*/ 
		            $u=Ucategory::where('category','=','Engineering')->where(function($query) use ($univ){
		       
		        if(isset($univ)){
		            foreach($univ as $uni){
		            	$un=$uni->uid;
		                $query->where('uid','$un');
		            }
		        }
		       })->get();

		       }
		       return view('search1',compact('u'));

		          } 


       }




