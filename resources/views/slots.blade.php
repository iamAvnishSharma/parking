@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="card-columns">
        @foreach ($slots as $slot)
            <div class="card" style="width:100px">
                <div class="card-body">
                    <a href="./slot/{{$slot->id}}">Slot number {{$slot->id}}</a>
                </div>
            </div>
        @endforeach
    </div>

    

</div>
@endsection
