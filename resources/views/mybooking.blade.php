@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="card-columns">
        @foreach ($slots as $slot)
            <div class="card" style="width:200px">
                <div class="card-body">
                        <p>Type: {{$slot->type}} Wheeler</p><br>
                        <p>Address: {{$slot->address}}</p><br>
                        <p>Special Slot: {{$slot->special}}</p><br>
                    <a href="/slot/{{$slot->id}}/release">Release {{$slot->id}}</a>
                </div>
            </div>
        @endforeach
    </div>

    

</div>
@endsection
