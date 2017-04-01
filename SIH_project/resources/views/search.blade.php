<ul>

	@foreach($univ as $uni)
	   <li>{{$uni->uname}}</li>
	   <li>{{$uni->city}}</li>
	@endforeach

  </ul>

<form action="/filter" method="get">
<div class="col s3" style="padding:5px;">
        <!-- Grey navigation panel -->
            Dropdown Trigger 
          <br>
          <br>
      <label>category</label>
  <select class="browser-default" name="category">
    <option value="" disabled selected>Select programme</option>
<input type="hidden" name="universe" value="{{$univ->">
    <option value="1" id="1">engineering</option>
    <option value="2" id="2">medical</option>
    <option value="3" id="3">law</option>
  </select>
          
          <br>
          <br>
          
          <label>level</label>
  <select class="browser-default">
    <option value="" disabled selected>Select course</option>
    <option value="1">UG</option>
    <option value="2">PG</option>
    <option value="3">Diploma</option>
  </select>
          
          <br>
          <br>
          
          <label>type</label>
  <select class="browser-default">
    <option value="" disabled selected>Select mode</option>
    <option value="1">Private</option>
    <option value="2">Government</option>
    <option value="3">Semi-Government</option>
  </select>
          
          <br>
          <br>
          <input type="submit" value="submit">
         
          <label>Browser Select</label>
  <select class="browser-default">
    <option value="" disabled selected>Select state</option>
      <option value="1">Any</option>
    <option value="1">New Delhi</option>
    <option value="2">Andhra Pradesh</option>
    <option value="3">Uttar Pradesh</option>
  </select>
    </div>      
    </form> 
  </body>
  </html>