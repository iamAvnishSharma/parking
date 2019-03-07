@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="row justify-content-center">
        
            <div class="card  w-25">
                <div class="card-body"><a href="/slots"> OPEN : </a></div>
            </div>
            <div class="card  w-25">
                    <div class="card-body">BOOKED :</div>
            </div>
            <div class="card  w-25">
                    <div class="card-body">FACULTY :</div>
            </div>
            <div class="card  w-25">
                    <div class="card-body">HANDICAP :</div>
            </div>
        
    </div>

</div>
@endsection
