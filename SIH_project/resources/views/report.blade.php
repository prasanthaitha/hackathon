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
                <span class="card-title center" style="font-size:35px; color:white;"><b><u>REPORT</u></b></span>
                <br>
                <br>
                <div class="row">
    <form class="col s12" method ="post" action="/reportx">
              {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">perm_identity</i>
          <input id="first_name" type="text" class="validate" required>
          <label for="first_name" style="font-size:15px;color:white;">First Name*</label>
        </div>
        <div class="input-field col s6">
            
          <input id="last_name" type="text" class="validate">
          <label for="last_name"  style=" font-size:15px;color:white;">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
            
          <input id="email" type="email" class="validate" required>
          <label for="email" data-error="wrong" data-success="right" style="font-size:15px; color:white;">Email Id*</label>
        </div>
      </div>
        
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" min="1000000000" max="1000000000000">
          <label for="icon_telephone"  style="font-size:15px;color:white;">Your Contact No*</label>
        </div>
        </div>
        
      <div class="row">
           <div class="input-field col s12">
               <i class="material-icons prefix">business</i>
          <input id="c/u" type="text" class="validate" required name="college_name">
          <label for="c/u"  style="font-size:15px;color:white;">College/University Name*</label>
          </div>  
      </div>
        
         <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="locality">
          <label for="address"  style="font-size:15px;color:white;">locality</label>
        </div>
      
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="city" required>
          <label for="address"  style="font-size:15px;color:white;">City*</label>
        </div>
      </div>
         <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="state">
          <label for="address"  style="font-size:15px;color:white;">State*</label>
        </div>
      
             
      <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
        
          <input id="address" type="text" class="validate" name="pincode">
          <label for="address"  style="font-size:15px;color:white;">Pincode*</label>
        </div>
      </div>
        <div>
        <p>COLLEGE DETAILS:-</p>
        </div>
        <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">subject</i>
    <select multiple name="category">
      <option value="" disabled selected>Choose category</option>
      <option value="1">Medical</option>
      <option value="2">Law</option>
      <option value="3">Engineering</option>
        <option value="4">Others</option>
        
    </select>
    
  </div>
            
            <div class="input-field col s6">
                
                 <i class="material-icons prefix">subject</i>
          <input id="degree" type="text" class="validate" name="degree">
          <label for="degree"  style="font-size:15px;color:white;">Degree</label>
        </div>
            
          
        
      </div>
        
          

        <div class="input-field col s6">
             <i class="material-icons prefix">subject</i>
    <select name="level">
        
      <option value="" disabled selected>Choose your level</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">Diploma</option>
      
    </select>
   
  </div>
        
            
            <div class="input-field col s6">
                <i class="material-icons prefix">subject</i>
          <input id="course" type="text" class="validate" name="branch">
          <label for="course"  style="font-size:15px;color:white;" required>Branch</label>
        </div>
        </div>
          
        
      
        
        
         <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
          <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
          <label for="textarea1"  style="font-size:15px;color:white;">Remarks</label>
        </div>
      </div>
        
        <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file"  multiple >
      </div>
      <div class="file-path-wrapper">
        <input  class="file-path validate" type="text"  style="font-size:15px;color:white;" placeholder="Upload one or more files*">
      </div>
    </div>
                    
 <button class="btn waves-effect waves-light left" type="reset" class="btn">Reset</button>
        
      <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
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
        © 2017 Find Fake, All rights reserved.
        </div>
      </div>
    </footer>
      

      <script>
      $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    </body>
        </html>