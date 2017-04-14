@extends('layouts.app')

@section('content')
          
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="clo-lg-4 clo-lg-offset-4">
                    <center><h3>Click below to see your reports</h3></center>
                    <center><h2><a href="/tosee"><b>Your Reports</b></a></h2></center>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
