@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="row justify-content-center">
        @php
        $total = DB::table('slots')->count();
        $count = DB::table('slots')->where('occupied','no')->count();   
        $faculty = DB::table('slots')->where('special','faculty')->count();   
        $handicap = DB::table('slots')->where('special','handicap')->count();   
        $booked = $total-$count;
         
        @endphp
            <div class="card  w-25">
            <div class="card-body"><a href="./slots"> OPEN : {{$count}}</a></div>
            </div>
            <div class="card  w-25">
            <div class="card-body">BOOKED : {{$booked}}</div>
            </div>
            <div class="card  w-25">
                    <div class="card-body">FACULTY : {{$faculty}}</div>
            </div>
            <div class="card  w-25">
                    <div class="card-body">HANDICAP : {{$handicap}}</div>
            </div>
        
    </div>

</div>
@endsection
