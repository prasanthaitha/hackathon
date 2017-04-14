@extends('layouts.app1')

@section('body')
	<br>
	<a href="/report" class="btn btn-info">Add New Report</a>
	<a href="/home" class="btn btn-info">Back to Home</a>
	<div class="clo-lg-4 clo-lg-offset-4">
		<center><h1>Your Reports</h1></center>

		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Collge Name</th>
		      <th>Course Name</th>
		      <th>Message</th>
		      <th>Status</th>
		      <th>Ticket No.</th>
		      <th>Reported at</th>
		    </tr>
		  </thead>
		  @foreach($reports as $report)
		  		<tbody>
				    <tr class="active">
				      <td>{{$report->college_name}}</td>
				      <td>{{$report->course_name}}</td>
				      <td>{{$report->message}}</td>
				      <td>{{$report->status}}</td>
				      <td>{{$report->ticket}}</td>
				      <span><td>{{$report->created_at->diffForHumans()}}</td></span>
				    </tr>
			    </tbody>
		  @endforeach
		  
		</table> 
	</div>
@endsection