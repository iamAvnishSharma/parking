@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="card-columns">
        @for ($i = 0; $i < 50; $i++)
            <div class="card" style="width:100px">
                <div class="card-body">
                    <a href="/slot/{{$i}}">Slot number {{$i+1}}</a>
                </div>
            </div>
        @endfor
    </div>

    

</div>
@endsection
