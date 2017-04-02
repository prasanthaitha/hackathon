<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
     
         <div class="row">
        <div class="col s12 m12">
          <div class="card">
             
               <h3 class="center-align">  Engineering Colleges</h3>
            <div class="card-content col m4 center-align offset-m4">

                  <form >
                     <input type="text" class="form-control" id="search" name="search" placeholder="Search a college">
                  </form>

  


                    
                
            </div>



               <table class="table table-bordered table-hover">
									<thread>
									<tr><th>Institute name</th>
									<th>city</th>
									<th>city</th>



									</tr></thread>

		                         <tbody>
		                         	
		                         </tbody>
		                         
                         </table>

             
            
          </div>
        </div>
      </div>
      




</div>
<!--
<div class="panel-body">
<div class="form-group">
<input type="text" class="form-control" id="search" name="search"></input></div>-

<table class="table table-bordered table-hover">
<thread>
<tr><th>ID</th>
<th>first NAME</th>



</tr></thread>

<tbody></tbody>

</div>
   </div> 
          </div></div>-->


<script> 
  $('#search').on('keyup',function(){
	$value=$(this).val();
     $.ajax({
     type:'get',url:'{{URL::to('live')}}',data:{'live':$value},
     success:function(data){
     	if(data.no!=""){
     	$('tbody').html(data);
     	//console.log(data);
     }
       else{
       	  alert('not found');
       }
 }


     })   


})

	</script>
</body>
</html>