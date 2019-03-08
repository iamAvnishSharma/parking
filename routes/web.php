<?php

use App\Slot;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/slots', 'SlotController@index');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/slot/{n}', function ($n) {
    $slot = DB::table('slots')->where('id',$n)->first();
    return view('slotbooking')->with('slot',$slot);
});

Route::get('/slot/{id}/book', function ($id) {
        $u = Auth::id();
        $slot = Slot::find($id);
        $slot->occupied = 'yes';
        $slot->occupiedby = $u;
        $slot->save();
        return redirect('/');
});

Route::get('/slot/{id}/release', function ($id) {
    $u = Auth::id();
    $slot = Slot::find($id);
    $slot->occupied = 'no';
    $slot->occupiedby = 'none';
    $slot->save();
    return redirect('/');
});


Route::get('/mybooking', function () {
    $u = Auth::id();
    $slots = DB::table('slots')->where('occupiedby',$u)->get();
    return view('/mybooking')->with('slots',$slots);
});

Route::post('/slot/store/new', 'SlotController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
