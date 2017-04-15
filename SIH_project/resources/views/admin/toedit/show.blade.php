@extends('layouts.app2')

@section('body')
	<br>
	<a href="/toedit" class="btn btn-info">Back</a>
	
	<div class="clo-lg-4 clo-lg-offset-4">
		<p>College Name:{{$item[0]->college_name}}
		<p>Branch:{{$item[0]->branch}}</p>
		<p>Course Name:{{$item[0]->course_name}}</p>
		<p>Category:{{$item[0]->category}}</p>
		<p>Degree:{{$item[0]->degree}}</p>
		<p>Locality:{{$item[0]->locality}}</p>
		<p>City:{{$item[0]->city}}</p>
		<p>State:{{$item[0]->state}}</p>
		<p>pincode:{{$item[0]->pincode}}</p>
		<p>Message:{{$item[0]->message}}</p>
		<p>Status:{{$item[0]->status}}</p>
	</div>
@endsection