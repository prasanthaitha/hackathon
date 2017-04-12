<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\Auth;
use App\User;
class ReportController extends Controller
{
    //


     public function ReportForm(){

     		
     			
     
     		if(Auth::user() != null){
     		
     			return view('report');
     		}

     		else
     			 return redirect('login');
     }
     public function ReportNow(Request $data){

     	

     		
		       	$user=User::findOrFail(Auth::user()->id);
		       	$tid = \App\Report::all()->last()->rid;
		        $report = new Report;
		        $report->message = $data->message;
		     

		      	  $report->college_name= $data->college_name;
		      	  $report->locality = $data->locality;
		          $report->pincode = $data->pincode;
		      	  $report->city = $data->city;
		          $report->state = $data->state;
		        $report->degree = $data->degree;
		        $report->category = $data->category;
		        $report->branch = $data->branch;
		        $report->course_name = $data->level;
		    
		        $report->id = $user->id;
        		

		        // $report->save(); //saving in db

		        
		       // $id = $report->rid;

		        $flag = 170000;
		        $Id = $flag + $tid + 1;
		        $ticket = "UGC".(string)$Id;

		        $report->ticket = $ticket;

		        
		        $report->save(); // saving in db
                  // return $report->ticket; 
		        return view('redirect',compact('ticket'));

		        return $ticket.'is ur ticket no.';
		        return 'your report is filed, Thank You'.$ticket.'is your ticket number';

		 

   
        
}

	public function CheckStatus(Request $request){
			
				//$user = array();

				$user=User::where('email','LIKE',$request->input('email'))->get();
               //return $user;     			

     			foreach($user as $u)
     			{
                   //return $u->id;
     			$rep = Report::where('id','=',$u->id)->where('ticket','LIKE',$request->input('ticket'))->get();
     			//break;

     			}
     			
     			if(($rep[0]->status)==0)
                        {
                            $r = 'not resolved';
                            return view('ticket',compact('rep','r'));
     		             }
                else if(($rep[0]->status)==1)
                        {
                            $r = 'resolved';
                            return view('ticket',compact('rep','r'));
                         }
     		}
		
	public function repindex(){
    	$reports = Report::all();
    	return view('report.repinfo',compact('reports'));
    }

    public function repnewReport(){
    	
    	return view('report.repinsert');
    }


    public function repedit($id){
    	$reports = Report::where('rid',$id)->first()->get();
    	return view('report.repupdate',compact($reports->status));
    }


    public function repdelete($id){
    	University::where('rid',$id)->delete();
    	return back();
    	
    }


    public function repsave(ReportRequest $request){
    	for($i=0;$i<20;$i++){

    		$r = new Report;

    		$r->locality=$request->input('locality');
            $r->state=$request->input('state');
             $r->city=$request->input('city');
                       
                        $r->status=$request->input('status');
                       
                        $r->locality=$request->input('locality');
                       
                        $r->ticket=$request->input('ticket');
                       
                       
                        $r->message=$request->input('message');
                       
                        $r->branch=$request->input('branch');
                       
                        $r->course_name=$request->input('course_name');
                        $r->college_name=$request->input('college_name');
                        $r->degree=$request->input('degree');

                       


			$r->save();

		}
		return back()->withInput();
	}
    	
    public function repupdateInfo(ReportRequest $request){
	
	$r=new Report;
	$data = array('status'=>$request->input('status'));

	$r->where('rid',$request->input('rid'))->update($data);
	return redirect('/');
    }	


    public function pending()
    {
    $rep=Report::where('status','=',0)->get();
    return view('admin.pending',compact('rep'));

    }
	
}
