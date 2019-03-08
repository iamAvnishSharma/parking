@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Online Parking System</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Create a New slot 
        </div>
        <div class="card-body">
            <form action="./slot/store/new" method="POST">
                @csrf
                <label for="">Type</label>                
                <select name="type" id="type">
                    <option value="two">Two Wheeler</option>
                    <option value="four">Four Wheeler</option>
                </select>
                <br>
                <label for="">Address</label>                
                <input name="address" type="text" value="MPSTME">
                <br>
                <label for="">Special</label>                
                <select name="special" id="type">
                    <option value="all">NO</option>
                    <option value="faculty">Faculty</option>
                    <option value="handicap">Handicap</option>
                </select>
                <br>
                <input class="btn" type="submit" name="Submit">
            </form>
        </div>
    </div>

    

</div>
@endsection
