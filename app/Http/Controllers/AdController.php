<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Earning;
use App\Models\Package;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $package_ids = Recharge::where('user_id',$user_id)->where('status','approved')->where('deleted_at','=',null)->pluck('package_id')->toarray();
        if(sizeof($package_ids) > 0){
            $ads_count = Package::wherein('id',$package_ids)->sum('ads');
            
        }
        else{
            $ads_count = 0;
        }
        
        $today_earnings_ads = Earning::where("user_id",$user_id)->wheredate('created_at','=',now())->count();
        $remaining_ads = $ads_count - $today_earnings_ads;
        if($ads_count > 0){
            $ads = Ad::all()->random($remaining_ads);
        }
        else{
            $ads = [];
        }
        return view('ads')->with('ads',$ads)->with('ads_count',$ads_count);
    }
}
