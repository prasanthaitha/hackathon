@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in as admin!
                    <br>
                    <center><h3>Click below To see All reports</h3></center>
                    <a href="/toedit"><center><h2>Reports</h2></center></a>

                </div>
                <br>



            </div>


        </div>
    </div>
</div>
@endsection