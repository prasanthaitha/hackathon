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
    
    <script>
      $(document).ready(function() {
    $('select').material_select();
  });
    </script>
      
    </head>
    <body class="black">
        
     <div class="navbar-fixed" style="z-index:1000">
    <nav style="height: 5em;" class="wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="./index.html" class="brand-logo" style="font-size: 3.5em;color:white;">&emsp;Find Fake</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="#">HOME<i class="material-icons right">home</i></a></li>

        </ul>
        </div>
        </nav>
  </div> 
        <br>
        <br>
   <div class="row">
        <div class="col s12 m6 offset-s3">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
              <form action="updateInfo" method="post">
                {{csrf_field()}}
                <span class="card-title center" style="font-size:35px; color:white;"><b><u>FORM</u></b></span>
                <br>
                <br>
       
        
      <div class="row">
           <div class="input-field col s12">
               <i class="material-icons prefix"></i>
          <input id="c/u" type="text" class="validate" name="uname" required>
          <label for="c/u"  style="font-size:15px;color:white;">College/University Name*</label>
          </div>  
      </div>
        
         <div class="row">
      
      
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="city" required>
          <label for="address"  style="font-size:15px;color:white;">City*</label>
        </div>
      </div>
         <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="state" required>
          <label for="address"  style="font-size:15px;color:white;">State*</label>
        </div>
      
             
      
       
        
        </div>
          
        
      
        
        
        
                    
 <button class="btn waves-effect waves-light left" type="reset" class="btn">Reset</button>
        
      <button class="btn waves-effect waves-light right" type="submit" name="action">Update
    <i class="material-icons right">send</i>
  </button>
                    <br>
                    <br>
         </form>
  </div>
            </div>
          </div>
        </div>
      

        <footer class="page-footer wow fadeInUp" style="background-color: #263238;">
      <div class="footer-copyright">
        <div class="container">
        </div>
      </div>
    </footer>
      
    </body>
        </html>