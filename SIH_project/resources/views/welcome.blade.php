<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find Fake - Homepage</title>
    <!-- CSS-->
    <link href="/css/prism.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/materialize.min.css">

    <link href="/css/style1.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('.slider').slider({
                full_width: false,
                interval: 5000,
                transition: 1800,
                height: 300,
            });

        });

    </script>


</head>

<body class="parallax-demo" style=>
    <header>



        <nav class="nav-extended wow fadeInUp" style="height:7em;">
            
            <div class="nav-wrapper" style="background-color: #004040;">
                <a href="#" class="brand-logo" style="font-size: 3.5em;">&emsp;Find Fake</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @if (Route::has('login'))
                    
                        @if (Auth::check())
                    <li>
                        <a href="{{ url('/home') }}" class="waves-effect waves-light btn">My Profile</a>
                    </li>
                        @else
                    <li>
                        <a href="{{ url('/login') }}" class="waves-effect waves-light btn">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}" class="waves-effect waves-light btn">Register</a>
                    </li>
                    @endif
                    
                    @endif
                    <!--  <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
        <li><a class="waves-effect waves-light btn">Register<i class="material-icons right">email</i></a></li> -->
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
                    <li><a class="waves-effect waves-light btn">Register<i class="material-icons right">email</i></a></li>
                </ul>
            </div>
            
            <div class="nav-content" style="background-color: #004040;">
                <ul class="tabs tabs-transparent">
                    <li class="tab" style="display:none;"><a href="./list3.html">Unapproved Institute</a></li>
                    <li class="tab" style="display:none;"><a href="#">Unapproved Courses</a></li>
                    <li class="tab" style="display:none;"><a href="./list3.html">Closed Institutes</a></li>
                    <li class="tab" style="display:none;"><a href="/ccos">Closed Courses</a></li>
                    <li class="tab" style="display:none;"><a href="/dlp">Approved Distance Courses</a></li>
                </ul>
            </div>
            

        </nav> 

        <br> <br>
        <div class="row">
       <div class="col m2">
        <a href='/uncol' style="color: #004040; font-family:'Ubuntu';"> Unapproved Institute</a>
        </div>

        <div class="col m2">
               <a href='/uncos' style="color: #004040; font-family:'Ubuntu'" >Unapproved Courses</a>
               </div>

               <div class="col m2">
               <a href='/ccol' style="color: #004040; font-family:'Ubuntu'">Closed Institutes</a>
                </div>


               <div class="col m2">
               <a href='/ccos' style="color: #004040; font-family:'Ubuntu'">Closed Courses</a>
               </div>

               <div class="col m2">
               <a href='/dlp' style="color: #004040; font-family:'Ubuntu'">Approved Distance Courses</a>
               </div>

               <div class="col m2">
                    <div class="links">
                            <a href="http://www.nbaind.org/Files/AccreditedPrograms.aspx" style="color: #004040; font-family:'Ubuntu'">NAAC ACCREDITATED COURSES</a>
                    </div>
               </div>    
</div>

    </header>
    
    
    

    <!--  Parallax Section  -->

    <main>
        <div class="parallax-container" style="z-index: 999999;">
            <div class="row">
                <div class="col s12 offset-s2">
                    <div class="section no-pad-bot">
                        <div class="row">
                            <div class="col s8">
                                <div class="container">

                                    <br><br><br><br><br><br>

                                    <form class="col s12 center" action="/" method="get">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input placeholder="Search College" name="university"   type="text" class="validate " style="background-color:white;color:black;">

                                            </div>
                                            <div class="input-field col s6">
                                                <input name="city"   type="text" class="validate" style="background-color:white; color:black;" placeholder="Search City">

                                            </div>

                                            <div class="input-field col s2 offset-m5">
                                                <button class="btn waves-effect waves-light right" type="submit" name="action" >Submit
    <i class="material-icons right">send</i>
  </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <br><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax"><img src="/images/2.jpg" style="opacity:0.8;"></div>

        </div>
        <!-- 
<form action="/" method="get">


<input type="text" name="university" id="txt_1" onKeyup='saveValue(this);'/>
<input type="text" name="city" id="txt_2" onKeyup='saveValue(this);'/> -->


        <!-- 

<div class="col s3" style="padding:5px;">
       
          <br>
          <br>
      <label>category</label>



  <select class="browser-default" name="category">
    <option value="" disabled selected>Select programme</option>
    <option value="Engineering" id="1">engineering</option>
    <option value="Medical" id="2">medical</option>
    <option value="Law" id="3">law</option>
  </select>
          
          <br>
          <br>
          
          <label>level</label>
  <select class="browser-default" name="level">
    <option value="" disabled selected>Select course</option>
    <option value="UG">UG</option>
    <option value="PG">PG</option>
    <option value="Diploma">Diploma</option>
  </select>
          
          <br>
          <br>
          
          <label>type</label>
  <select class="browser-default" name="type">
    <option value="" disabled selected>Select mode</option>
    <option value="Private">Private</option>
    <option value="Government">Government</option>
    <option value="Semi-Government">Semi-Government</option>
  </select> -->

        <!--    <br>
          <br> 
          <input type="submit" value="submit"> -->





        <!--     
          <label>Browser Select</label>
  <select class="browser-default">
    <option value="" disabled selected>Select state</option>
      <option value="1">Any</option>
    <option value="1">New Delhi</option>
    <option value="2">Andhra Pradesh</option>
    <option value="3">Uttar Pradesh</option>
  </select>-->

        <!-- </form> -->
       
    @if($fake!=NULL)

                
      <div style="background-color:#009688; margin:0px; padding:0px;">
                <h3 style="font-family:'Ubuntu'; color:white; " class="center-align"> Fake Institutes </h3>

                

        <ul>
            @foreach($fake as $fak)

             <div class="row" style="background-color: #009688;">
    <div class="col s12 m6 offset-m3">
      <div class="card " style="width:700px;">
       
        <div class="card-content hoverable">

            <li  style="font-family: 'Ubuntu Mono', monospace; font-size: 1.5em;"> <b>{{$fak->name}} </b></li> <br>
            <li  style="font-family: 'Ubuntu Mono', monospace;">City:{{$fak->city}} &emsp;
            State:{{$fak->state}}</li><br> &emsp;
            <a href="/fake/details/{{$fak->unid}}"> View more details</a></li>


            </div>
      </div>
    </div>
  </div>

            @endforeach
        </ul>


        </div>


            
        @endif
       





       

               @if($univs!=NULL)

                
      <div style="background-color:#009688; margin:0px; padding:0px;">
                <h3 style="font-family:'Ubuntu'; color:white; " class="center-align"> Authorised Institutes </h3>

                

        <ul>
            @foreach($univs as $uni)

             <div class="row" style="background-color: #009688;">
    <div class="col s12 m6 offset-m3">
      <div class="card " style="width:700px;">
       
        <div class="card-content hoverable">

            <li  style="font-family: 'Ubuntu Mono', monospace; font-size: 1.5em;"> <b>{{$uni->uname}} </b></li> <br>
            <li  style="font-family: 'Ubuntu Mono', monospace;">City:{{$uni->city}} &emsp;
            State:{{$uni->state}}</li><br> &emsp;
            <a href="/details/{{$uni->uid}}"> View more details</a></li>


            </div>
      </div>
    </div>
  </div>

            @endforeach
        </ul>


        </div>


            
        @endif
         
        
  


        <!-- 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">My Profile</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
 -->

        <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
        <!--  </div>
        </div> -->
        <div id="teal1" class="block teal lighten-1 container-fluid wow fadeInUp" style="margin-top: -0.7em;">
            <nav class="pushpin-demo-nav" data-target="teal1" style="z-index: 99999;">
                <div class="nav-wrapper teal">
                    <div class="container">
                        <a href="#" class="brand-logo center" style="font-size: 3em;">Departments</a>

                    </div>
                </div>
            </nav>




            <div class="slider">


                <div class="row" style="position: relative;top:0em;">

                    <ul class="slides" style="height:540px;">


                        <li>
                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="/images/engg.jpg">
                                        <span class="card-title">Engineering</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Management sector.</p>
                                    </div>
                                    <div class="card-action">
                                        <!--  <a href="category.html#manage"><b>Explore</b></a> -->
                                        <a href="/category">Explore</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="/images/management.jpg">
                                        <span class="card-title">Managemnent</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Engineering sector.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>

                            </div>


                            <div class="col s6 m3">

                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="/images/med.jpg">
                                        <span class="card-title">Medical</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Medical sector.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="/images/law.jpg">
                                        <span class="card-title">Law</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Law sector.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="/images/sports.jpeg">
                                        <span class="card-title">Sports</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Sports fields.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="images/commerce.jpg">
                                        <span class="card-title">Commerce</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Commerce sector.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>

                            </div>


                            <div class="col s6 m3">

                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="images/design.jpg">
                                        <span class="card-title">Design</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Design field.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s6 m3">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img src="images/arts.jpg">
                                        <span class="card-title">Arts</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Discover the latest opportunities in the Arts field.</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/category"><b>Explore</b></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>




                </div>

            </div>

            <br>
            <br>







            <br> <br>

            <div class="parallax-container wow fadeInUp" style="margin-top: -1.3em;">
                <div class="section no-pad-bot">
                    <div class="container">
                        <br><br>
                        <div class="row">
                            <div class="col s12 m6 offset-s1">
                                <div class="card blue-grey darken-1">
                               
                                    <div class="card-content white-text">
                                        <span class="card-title center" style="font-size:30px;"><u>Know When To Report</u></span>
                                        <br>

                                        <div>
                                            <p style="font-size:20px;"> -If the college/university you are looking for does not exist</p>
                                        </div>
                                        <br>
                                        <div>
                                            <p style="font-size:20px;">-If the course you are looking for in a college/university does not exist</p>
                                        </div>
                                        <br>

                                     <form action="/report" method="get">
                                        <!--<button class="btn waves-effect waves-light right" type="submit" name="action" target="_blank" onclick="admin_login.html">Report
    <i class="material-icons right">send</i>
  </button>-->

                                        <input type="submit" value="Report Now" class="waves-effect waves-light btn"><i class="material-icons right"></i></a>

</form>
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 offset-s1">
                                <div class="card blue-grey darken-1" style="height:280px;">
                                    <div class="card-content white-text">
                                        <span class="card-title center" style="font-size:30px;"><u>Report Status</u></span>

                                        <form action="/report/check" method="get">

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="email" id="email" type="email" class="validate">
                                                    <label for="email" style="font-size:20px; color:white;">Email</label>
                                                </div>

                                                <div class="input-field col s12">
                                                    <input id="last_name" type="text" class="validate" name="ticket">
                                                    <label for="last_name" style="font-size:20px; color:white;">Ticket no</label>
                                                </div>
                                      


                                        <button class="btn waves-effect waves-light right" type="submit" name="action">Check Status
    <i class="material-icons right">send</i>
  </button>  </form>



                                        <br>
                                        <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="parallax" bgcolor="#ffffff"></div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <footer class="page-footer wow fadeInUp" style="background-color: #004040;">
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <h5 class="white-text" style="font-family:'Ubuntu';"><b> Find Fake </b> </h5>
                    <!-- <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p> -->


                </div>
                <div class="col l4 s12">
                    <h5 class="white-text"> Find Us At</h5>
                    <p class="grey-text text-lighten-4">Find Fake Authority<br> P. O. Box No. 1075, Nagarbhavi, Bangalore -560072, <br> Karnataka, India </p>

                </div>

                <div class="col l4 s12">
                    <h5 class="white-text">Contact Us</h5>
                    <p class="grey-text text-lighten-4">For any more information, you can contact us on:<br><b><em style="font-size: 1.2em;font-family: 'Ubuntu'">findfake@gmail.com</em></b></p>
                    <p class="grey-text text-lighten-4"> . Phone. +91-80-23210261 </p>

                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Find Fake, All rights reserved.
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <script>
        if (!window.jQuery) {
            document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>');
        }

    </script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/wow.min.js"></script>


    <script>
        // Initialize collapse button
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        });

    </script>

    <script>
        new WOW().init();

    </script>

    

    


</body>

</html>
