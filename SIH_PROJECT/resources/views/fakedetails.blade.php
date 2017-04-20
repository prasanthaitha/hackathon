


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width ,initial-scale=1.0">
        <title>Find Fake</title>
      <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
     <!--  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <!--   <link rel="stylesheet" href="startcss.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="stylesheet" href="./css/component.css">
        <script src="js/modernizr.custom.js"></script> -->

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

		<body>

       
       <div class="navbar-fixed" style="z-index:1000">
    <nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="/" class="brand-logo" style="font-size: 3.5em;color:white;">&emsp;Find Fake</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="/">HOME</a></li>
        </ul>
        </div>
        </nav>
  </div> 
  
    <br> <br> <br>

       <h1 class="center-align">  Fake Institute</h1> <br> <br>

         <div class="container center-align">
				@foreach($ufdel as $ufdel1)
			<h3>	{{$ufdel1->name}} </h3> <br>

			 <h4>    Address                 </h4> 

				{{$ufdel1->locality}} 

			<p>	{{$ufdel1->city}} </p>
			<p>	{{$ufdel1->state}}</p> 
			<p>	{{$ufdel1->pincode}}</p>
				@endforeach
    
          </div>


        </body>
      </html>    