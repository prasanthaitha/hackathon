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
        		

		        $report->save(); //saving in db

		        
		        $id = $report->rid;

		        $flag = 170000;
		        $Id = $flag + $id;
		        $ticket = "UGC".(string) $Id;

		        $report->ticket = $ticket;

		        
		        $report->save(); // saving in db
		        return 'your report is filed, Thank You';
		 

   
        
}

	public function CheckStatus(Request $data){
			
				$user = array();

				$user[]=User::where(email == $data->email);
     			

     			foreach($user as $u)
     			{
     			$rep = Report::where(id == $u->id && ticket== $data->ticket);
     			break;

     			}
     			
     			return $rep->status;
     		
     		}
		
		
	
}
