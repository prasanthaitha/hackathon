
<form action="/" method="get">


<input type="text" name="university" id="txt_1" onKeyup='saveValue(this);'/>
<input type="text" name="city" id="txt_2" onKeyup='saveValue(this);'/>




<div class="col s3" style="padding:5px;">
        <!-- Grey navigation panel -->
           <!-- Dropdown Trigger -->
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
  </select>
          
          <br>
          <br>
          <input type="submit" value="submit">


         
</div>
   
     <!--     
          <label>Browser Select</label>
  <select class="browser-default">
    <option value="" disabled selected>Select state</option>
      <option value="1">Any</option>
    <option value="1">New Delhi</option>
    <option value="2">Andhra Pradesh</option>
    <option value="3">Uttar Pradesh</option>
  </select>-->
    
</form>

@if($univs!=NULL)

    <ul>
    @foreach($univs as $uni)
       <li>{{$uni}}</li>
      
    @endforeach
    </ul>
@endif
  
    <script>
           document.getElementById("txt_1").value=getSavedValue("txt_1");
              document.getElementById("txt_2").value=getSavedValue("txt_2");
            
                 function saveValue(e){
                     
                        var id=e.id;
                     var val=e.value;
                       localStorage.setItem(id,val);
                 }
              
                function getSavedValue (v) {
                    
                      if(localStorage.getItem(v)==null)
                            {
                                return"";
                            }
                    return localStorage.getItem(v);
                }
    </script>


<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find Fake</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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

            <div class="content">
                <div class="title m-b-md">
                    Find Fake</br>
                    <form action="/search" method="get">
					<input type="text" name="university" placeholder="University/College Name">
					<input type="text" name="city" placeholder="city">
					<input type="submit" value="submit">
					</form>
                </div>

            <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>
    </body>
</html>

