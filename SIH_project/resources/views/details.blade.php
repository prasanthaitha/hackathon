         <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Find Fake</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        
    
    <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
    
    <style>
 #map {
   width: 100%;
   height: 400px;
   background-color: grey;
 }
</style>
    
</head>
<body class="#b2dfdb teal lighten-4">
    <!--Nav bar starts here-->

<div class="navbar-fixed" style="z-index:1000">
    <nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="./index.html" class="brand-logo" style="font-size: 3.5em;">&emsp;Find Fake</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="#">HOME<i class="material-icons right">home</i></a></li>
        </ul>
        </div>
        </nav>
  </div>    

    <!--Nav bar ends here-->
    
<div class="row">

      <div class="col s3" style="padding:80px 20px 0px 80px">
         
          <ul  style="background-color:#555;position:fixed; padding:0px 10px;">
  <li><a href="#home" style="font-size:30px;font-family:georgia,serif;color:white; padding:05px 30px;">Basic Details</a></li><br>
  <li><a href="#news" style="font-size:30px;font-family:georgia,serif;color:white;  padding:05px 30px;">Contact </a></li><br>
  <li><a href="#contact" style="font-size:30px;font-family:georgia,serif;color:white;  padding:05px 30px;">Address</a></li><br>
  <li><a href="#edu" style="font-size:30px;font-family:georgia,serif;color:white;  padding:05px 30px;">Map</a></li><br>
</ul>
          
         </div>
      <div class="col s9">
        <br>      @foreach($udel as $udel2)
         <h4 style="color:;font-family:georgia,serif;"> {{$udel2->uname}}<i class="medium material-icons left">business</i> </h4>@endforeach
          <h6 style="color:;font-family:georgia,serif;"> JSSATE CAMPUS UTTARAHALLI-KENGERI ROAD BANGALORE 560060 <i class="small material-icons left">location_on</i> </h6>
          <br>
           @foreach($udel as $udel2)
          <h5 style="color:;font-family:georgia,serif;">{{$udel2->uname}}<i class="small material-icons left">language</i> </h5>
          <h5 style="color:;font-family:georgia,serif; padding:9px 90px;"><b>Basic Details</b><i class="small material-icons left">view_headline</i> </h5>
    <br>
          <div class="row">
        <div class="col s12 m8 offset-s1">
          <div class="card hoverable white">
            <div class="card-content gray-text">
                <h5 style="color:;font-family:georgia,serif;">Approved By : <b> AICTE </b><i class="small material-icons left">thumb_up</i> </h5><br>
                
                 @foreach($udet as $udet2)
                 {{$udet2->type}}
                @endforeach

<!--                <h5 style="color:;font-family:georgia,serif;">University : A.K.T.U. University</b><i class="small material-icons left">group_work</i> </h5><br>-->
              <h5 style="color:;font-family:georgia,serif;">Courses Details : <a href="/course">Click Here</a><i class="small material-icons left ">fast_forward</i></h5>
              
            </div>
          </div>
        </div>
      </div>
    
     <h5 style="color:;font-family:georgia,serif; padding:9px 90px;"><b>Contact Information</b><i class="small material-icons left">contact_phone</i> </h5>
          <br>
    <div class="row">
        <div class="col s12 m8 offset-s1">
          <div class="card hoverable white">
            <div class="card-content gray-text">
                @foreach($udet as $udet2)
                <h5 style="color:;font-family:georgia,serif;">Website :  {{$udet2->website}}<i class="small material-icons left">email</i> </h5><br>
                <h5 style="color:;font-family:georgia,serif;">  Phone : 80 - 28611902 <i class="small material-icons left">call</i> </h5><br>
              
              
            </div>
          </div>
        </div>
      </div>
    
      <h5 style="color:;font-family:georgia,serif; padding:9px 90px;"><b>Address  </b><i class="small material-icons left">location_on</i> </h5>@foreach($udet as $udet2)
    <h6 style="color:;font-family:serif; padding:9px 90px; font-size:20px;"> {{$udet2->locality}} -{{$udet2->pincode}} </h6>@endforeach
    
    <h5><b>MAP</b></h5>
    <div id="map"></div>
    
      <footer class="page-footer " style="background-color: #263238;">
      <div class="footer-copyright">
        <div class="container">
        © 2017 Find Fake, All rights reserved.
        </div>
      </div>
    </footer>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNAgylwWP9V31ovPXTXkuPOUI51MG7y6Q&callback=initMap">
    </script>
    
    </body>
</html>