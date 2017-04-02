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
<body class="#90caf9 blue lighten-3">
<nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="./index.html" class="brand-logo" style="font-size: 3.5em;">&emsp;Find Fake</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="#">HOME<i class="material-icons right">home</i></a></li>
        </ul></nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="row">
        <div class="col s8 m4 offset-s4 ">
          <div class="card white">
              @if(session('status'))
                    {{session('status')}};
                @endif
            <div class="card-content white-text">
                <span class="card-title center" style="font-size:40px;"><b style="color:black ;">Login</b></span>
              <br>
                <br>
                <br>
                <div class="row">
                    
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group $errors->has('email') ? ' has-error' : '' ">
                            <label for="email" class="col-md-4 control-label" style="color:black;">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" style="color:black;"name="email"  value="{{ old('email') }}" required autofocus>

                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color:black;">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="color:black;" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                  <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    
<!--
                                    <p>
                                        <input type="checkbox" class="filled-in" name="remember" id="filled-in-box" checked="checked" {{ old('remember') ? 'checked' : '' }} />
                                        <label for="filled-in-box" style="color:black;">Remember me</label>
                                    </p>
-->
                                </div>
                            </div>
                        </div>
                         <br>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary #1565c0 blue darken-3">
                                    Login
                                </button>
                                <a class="btn btn-link #1565c0 blue darken-3" href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                                <h6 style="color:black;padding:0px 140px;">OR</h6>
                                <a class="btn btn-link #1565c0 blue darken-3 " style="padding:0px 130px;" href="register.html">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </form>
                    
    <!--<form class="col s12">
      
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right" style="font-size:15px;">Email/Username</label>
        
        </div>
        
           <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate">
          <label for="password" style="font-size:15px;">Password</label>
        </div>
            <p>
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Remember me</label>
    </p>
                <a href="#" style="float:right; color:white;">Forget password?</a>
      </div>
         <button class="btn waves-effect waves-light"  type="submit" name="action" style="align:center;">Submit
    <i class="material-icons right">send</i>
        </button>
        </form>-->
                </div>
          </div>
        </div>
      </div>
    </div>
            <footer class="page-footer wow fadeInUp" style="background-color: #263238;">
      <div class="footer-copyright">
        <div class="container">
        © 2017 Team Geeks, All rights reserved.
        </div>
      </div>
    </footer>

        
</body>
</html>
