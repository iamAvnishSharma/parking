@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>

            <div class="card">
                <div class="card-header">
                    SLOT NUMBER {{$n+1}}
                </div>
                <div class="card-body">
                    @guest
                        Login to Book This Slot 
                    @else
                        <a href="/slot/{{$n}}/book" class="btn">Book</a>
                    @endguest
                </div>
            </div>


    

</div>
@endsection
