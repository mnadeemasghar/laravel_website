<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Package;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $package_ids = Recharge::where('user_id',$user_id)->where('status','approved')->pluck('package_id')->toarray();
        $ads_count = Package::wherein('id',$package_ids)->sum('ads');
        $ads = Ad::all()->random($ads_count);
        return view('ads')->with('ads',$ads);
    }
}
