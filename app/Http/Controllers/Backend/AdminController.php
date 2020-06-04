<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class AdminController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index(){
    return view('admin.dashboard');
  }

    // public function index()
    // {
    //   return view('admin.admin_login');
    // }



    // public function check_admin(Request $request)
    // {

    //   $this->validate($request, [
    //     'email' => 'required|email',
    //     'password' => 'required',
    //   ]);
  
    //   if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    //     // Log Him Now
    //     return redirect()->intended(route('admin.dashboard'));
    //   }else {
    //     session()->flash('sticky_error', 'Invalid Login');
    //     return back();
    //   }
    // }



    //  public function logout(Request $request)
    //  {

    //     $this->guard()->logout();

    //     $request->session()->invalidate();

    //     return redirect()->route('admin.login');


    // }

}
