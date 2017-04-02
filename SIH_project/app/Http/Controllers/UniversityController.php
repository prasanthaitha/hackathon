<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UniversityRequest;
//use App\Http\Controllers\University;
use App\University;
class UniversityController extends Controller
{
    public function index(){
    	$universities = University::all();
    	return view('university.info',compact('universities'));
    }

    public function newUniversity(){
    	
    	return view('university.insert');
    }


    public function edit($id){
    	$universities = University::where('uid',$id)->first()->get();
    	return view('university.update',compact('universities'));
    }


    public function delete($id){
    	University::where('uid',$id)->delete();
    	return back();
    	
    }


    public function save(UniversityRequest $request){
    	for($i=0;$i<20;$i++){

    		$u = new University;
    		$u->uname=$request->input('uname');
    		$u->state=$request->input('state');
			$u->city=$request->input('city');

			$u->save();

		}
		return back()->withInput();
	}
    	
    public function updateInfo(UniversityRequest $request){
	
	$u=new University;
	$data = array('uname'=>$request->input('uname'),
					'state'=>$request->input('state'),
					'city'=>$request->input('city'));

	$u->where('uid',$request->input('uid'))->update($data);
	return redirect('/');
    }



    

}
