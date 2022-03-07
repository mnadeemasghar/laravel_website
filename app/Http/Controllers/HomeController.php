<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
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
        $user_id = Auth::user()->id;
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin.home');
        }
        else{

            $unlocked_packages = Package::wherehas('user',function ($q){
                $q->where('users.id','=',Auth::id());
            })->get();
            $locked_packages = Package::whereDoesntHave('user',function ($q){
                $q->where('users.id','=',Auth::id());
            })->get();
            if(Auth::user()->status == "pending"){
                $status = "Select Your Desired Package.";
            }
            else if(Auth::user()->status == "submitted"){
                $status = "Your Profile Requested is Submitted";
            }
            else {
                $status = null;
            }
            return view('main')->with('status',$status)->with('locked_packages',$locked_packages)->with('unlocked_packages',$unlocked_packages);
        }
    }
}
