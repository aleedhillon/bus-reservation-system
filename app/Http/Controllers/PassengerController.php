<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class PassengerController extends Controller
{
  /*public function __construct()
    {
        $this->middleware('guest')->except('registeruser');
    }*/

  public function showreagister()
  {
    $passengers = Passenger::all();
    foreach ($passengers as $key => $passenger) {
      # code...
    }
    return view('frontpages.register', compact('passenger'));
  }

  public function register(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required|confirmed',
      'password_confirmation' => 'required'

    ]);

    //$rpassword = $request->only(['rpassword']);
    //$data = $request->only(['name','email','password']);


    $password = Hash::make('password');
    $passenger = new Passenger();
    $data = [
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'password' => $password
    ];
    $passenger->persist($data);




    return redirect('front')->with('success', 'You are register Successfully');
  }

  public function showlogin()
  {
    return view('frontpages.login');
  }
  public function login(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required|confirmed',
      'password_confirmation' => 'required'

    ]);
    // $credentials = $request->except(['_token']);
    $credentials = $request->only('email');
    $passenger = Passenger::where('email', $request->email)->first();
    if (isset($passenger)) {
      return redirect('front');
    } else {
      Session::flash('message', "Invalid Credentials , Please try again.");
      return Redirect::back();
    }
  }
  public function showpassenger()
  {
    $bookings  = Booking::all()->load('passenger', 'user');
    return view('passengers.index', compact('bookings'));
  }

  public function logout()
  {
    Auth::logout();

    return redirect('loginuser');
  }
}
