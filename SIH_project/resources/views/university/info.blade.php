





         <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width ,initial-scale=1.0">
        <title>Find Fake</title>
      <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="startcss.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="stylesheet" href="./css/component.css">
        <script src="js/modernizr.custom.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>           
              <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
              <script src="startjs.js"></script>
      
    </head>
        
        <body class="#cfd8dc blue-grey lighten-4">
<nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="./index.html" class="brand-logo" style="font-size: 3.5em;color:white;">&emsp;Find Fake</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="#">HOME<i class="material-icons right">home</i></a></li>
        </ul></nav>
        
         <h3 class="center-align"><b>universities</b></h3>
        <br>
        <br>
        <h5 class="left-align" style="padding-left:20px;"><a href="{{URL::to('new')}}">New university</a>
    <br>
         <table  class="striped centered responsive-table">
    <thead>
        <tr>
        
            <th style="font-size:20px;">uid</th>
            <th style="font-size:20px;">uname</th>
            <th style="font-size:20px;">state</th>
            <th style="font-size:20px;">city</th>
            <th style="font-size:20px;">edit/del</th>
            
            <tbody>
            	@foreach($universities as $u)
            		<tr>
						<td>{{$u->uid}}</td>
						<td>{{$u->uname}}</td>
						<td>{{$u->city}}</td>
						<td>{{$u->state}}</td>
						<td><a href="{{URL::to('edit',array($u->uid))}}">Edit</a>

						|<a href="{{URL::to('delete',array($u->uid))}}">Delete</a></td>
					<tr>
					@endforeach
			</tbody>
		</table>
