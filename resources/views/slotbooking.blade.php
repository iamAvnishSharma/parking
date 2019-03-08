@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>

            <div class="card">
                <div class="card-header">
                    SLOT NUMBER {{$slot->id}}
                </div>
                <div class="card-body">
                    
                    <p>Type: {{$slot->type}} Wheeler</p><br>
                    <p>Address: {{$slot->address}}</p><br>
                    <p>Slot Prefrence: {{$slot->special}}</p><br>
                    @guest
                    <h1>    Login to Book This Slot </h1>
                    @else
                        @if($slot->special=='all')
                            <a href="./{{$slot->id}}/book" class="btn">Book</a>
                        @elseif($slot->special==Auth::user()->type)
                            <a href="./{{$slot->id}}/book" class="btn">Book</a>
                        @else   
                             <h1>Reserved</h1>
                        @endif
                    @endguest
                </div>
            </div>


</div>
@endsection
