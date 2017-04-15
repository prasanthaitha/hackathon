@extends('layouts.app1')

@section('body')
	<br>

	<div class="clo-lg-4 clo-lg-offset-4">
			<h1>Edit Report</h1>
			<form class="form-horizontal" method="post" action="/reportx1">
				{{csrf_field()}}
				<fieldset>
					<div class="form-group">
				      <label for="status" class="col-lg-2 control-label">Status</label>
				      <div class="col-lg-10">
				        <input type="boolean" class="form-control" id="status" placeholder="Update Status">
				      </div>
				    </div>
				 </fieldset>
			</form>
	</div>


@endsection