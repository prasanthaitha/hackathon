<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Ucategory;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Udetail;
use App\Urun;
use App\Course;
Use DB;
class SearchController extends Controller


{		

		    public function search(Request $request)
		{



		   $q=$request->input('university');
		   $r=$request->input('city');
            
		   if($q==NULL && $r==NULL)
		   	{ $univs=NULL;
		   		$fake=NULL;
		   	return view('welcome',compact('fake','univs'));
            }


		else{
		   $key=$request->category;
		   $key2=$request->type;
           
           $fake=\App\Unapp_Inst::where('name','LIKE','%'.$q.'%')->where('city','LIKE','%'.$r.'%')->get();
		      
		   $univs=University::where('uname','LIKE','%'.$q.'%')->where('city','LIKE','%'.$r.'%')->get();

            if(empty($univs[0]) && empty($fake[0])){
            	      
                       return 'nothing found';
                                }
            else{
                  	/*if(!empty($key)){
			     	$i=0;
	              	foreach($univs as $univ)
			        {	$v[$i]=Ucategory::where('uid','=',$univ->uid)->where('category','=',$key)->get();
			        	$i=$i+1;
	              	}
	             
	                 if(empty($v[0])){
			         	 return 'nothing found';}
					  
					  }

					  if(empty($key)){
					  	$v=$univs;
					  }

					  if(!empty($key2)){
					        
			
			        $j=0;
			        $y=0;
			        //return $i;
			        while($j<$i){
			        	//return $v[0];
			        	$xs=$v[$j];
			        	//return $xs;
				        foreach($xs as $x){
				        	$k[$y]=Udetail::where('uid','=',$x->uid)->where('type','=',$key2)->get();
				        	$y=$y+1;
				        } 
				     	$j=$j+1;
				     }
		   
			        if(empty($k[0]))
			        {	return 'nothing found';
			        }}
			    if(empty($key2)){
					  	$k=$univs;
					  }

				$j1=0;
			        $y1=0;
			        //return $i;
			        while($j1<$y){
			        	//return $v[0];
			        	$xs1=$k[$j1];
				        foreach($xs1 as $xs){
				        	$u[$y1]=University::where('uid','=',$xs->uid)->get(['uname','city']);
				        	$y1=$y1+1;
				        }
				        $j1=$j1+1;


				     }
	               

		             return view('welcome',compact('u'));}*/


		   //           if($key==NULL && $key2==NULL)
		   //          {

		   //          	return view('welcome',compact('univs'));
					// }

					// else if($key==NULL)
					// 	{


					// 		$i=0;
	    //           			foreach($univs as $univ)
			  //      			 {	$v[$i]=Udetail::where('uid','=',$univ->uid)->where('type','=',$key2)->get();
			  //       				$i=$i+1;
	    //           			}
	             			
	    //          			$univs = $v;
	    //           			return view('welcome',compact('univs'));
								 
					// 	}	

					// else if($key2==NULL)
					// 	{


					// 		$j=0;
	    //           			foreach($univs as $univ)
			  //      			 {	$v[$j]=Ucategory::where('uid','=',$univ->uid)->where('category','=',$key)->get();
			  //       				$j=$j+1;
	    //           			}
	    //          			//return $v;
	    //          			$univs = $v;
	    //           			return view('welcome',compact('univs'));
								 
					// 	}	
					// else if($key!=NULL && $key2!=NULL)
					// {


					// 		$i=0;
	    //           			foreach($univs as $univ)
			  //      		 	{
			  //      		 		$v[$i]=Ucategory::where('uid','=',$univ->uid)->where('category','=',$key)->get();
			  //       		$i=$i+1;
	    //           			}

	    //           			if(empty($v))
	    //           				return "nothing found";

			  //     			  $j=0;
			  //     			  $y=0;
			      
			  //      			 while($j<$i){
			        
			  //       		$xs=$v[$j];
			        	
				 //      		 foreach($xs as $x){
				 //        	$k[$y]=Udetail::where('uid','=',$x->uid)->where('type','=',$key2)->get();
				 //        	$y=$y+1;
				 //       		 } 
				 //     		$j=$j+1;
				 //     	}
                        
				 //     		if(empty($k))
				 //     			return "nothing found";
                            
     //                        else{
     //                        	$j1=0;
			  //                   $y1=0;
			      
			  //               while($j1<$y){
			  //       	  		$xs1=$k[$j1];
				 //           		foreach($xs1 as $xs){
				 //        	  		$u[$y1]=University::where('uid','=',$xs->uid)->get(['uname','city']);
				 //        	  		$y1=$y1+1;
				 //           							}
				 //       			 $j1=$j1+1;
     //                         }
     //                         $univs=$u;
				     		return view('welcome',compact('fake','univs'));
				     }
				 }





				}
		/*
		   //$k=$univ;
		  // Session::flash('values',$passvalues);
		   //Redirect::to('/search');
		   //$city=University::all();
		//return view('search',compact('univ'));
        
		 //return this->filter($univ
		}
		

 
		public function filter(request $request)
		{
			return $k;

			//ldinput = Session::get('values');
			//return $oldinput;
		}
		   /* $key=$request->category;

		     //return $key;
		return view('search1',compact('key'));

/*
		     switch($key)
		       {

		   case 1:
		        /*   $u=Ucategory::where('category','=','Engineering')->where('')->get();
		          return view('search1',compact('u'));
		          break;
		           case 2:
		           $u=Ucategory::where('category','=','Medical')->get();
		            break;
		
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
/*/



public function details($uid)
{
   $udel=University::where('uid',$uid)->get();
  // return $udel;
   $ucat=Ucategory::where('uid','=',$udel[0]->uid)->get();
    $udet=Udetail::where('uid','=',$udel[0]->uid)->get();
   







   return view('details',compact('udel','ucat','udet','ur'));


}
public function fakedetails($unid)
{
   $ufdel=\App\Unapp_Inst::where('unid',$unid)->get();
  // return $udel;
  
   


return $ufdel;




   return view('details',compact('udel','ucat','udet','ur'));


}


public function course($uid)
{
     $udel=University::where('uid',$uid)->get();
      $ur=Urun::where('uid','=',$udel[0]->uid)->get();
      
      foreach($ur as $ur2){
      $cour[]=Course::where('coid','=',$ur2->coid)->get();
}
//return $cour;
      return view('course')->with(compact('cour'));


}
public function index()
{
   return view('live');

}

public function live(Request $request)
{
     if($request->ajax())
     {  $output="";

     	$customers=DB::table('universities')->where('uid','=','%'.$request->live.'%')->orWhere('uname','LIKE','%'.$request->live.'%')->orWhere('city','=','%'.$request->live.'%')->get();
        if($customers)
        {
    foreach($customers as $key=>$customer){

        	$output.='<tr>'.'<td>'.$customer->uid.'</td>'
        	.'<td>'.$customer->uname.'</td>'
        	.'<td>'.$customer->city.'</td>'
        	 .'</tr>';
        }
  return Response($output);
    }
    else
    {
    	Return Response()->json(['no'=>'not found']);
    }



    }
}


public function ticket(Request $request)
{
    $r=$request->input('rstatus');
    $q=\App\Report::where('ticket','LIKE', $r)->get(['college_name','city','message','course_name']);

return view('ticket',compact('q'));


}


}
