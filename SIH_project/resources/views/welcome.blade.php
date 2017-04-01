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