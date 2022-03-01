<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin.home');
        }
        else{
            if(Auth::user()->status == "pending"){
                return view('package')->with('status',"Your Profile is in Pending Status");
            }
            else if(Auth::user()->status == "submitted"){
                return view('package')->with('status',"Your application has been submitted");
            }
            else if (Auth::user()->status == "active"){
                return view('main');
            }
        }
    }
}
