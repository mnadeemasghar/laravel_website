<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RechargeController extends Controller
{
    public function store_recharge(Request $request){
        $user_id = Auth::user()->id;
        
        $old_amount = Recharge::where('user_id',$user_id)->sum('amount');
        $old_packages = Recharge::where('user_id',$user_id)->get();
        foreach($old_packages as $old_package){
            $old_package->delete();
        }

        $amount = $request->amount;
        $total_amount = $amount + $old_amount;
        // dd($amount);
        $package = Package::where('max',">=",$total_amount)->first();
        // dd($package->max);


        $file = $request->file('image');
        $name = $user_id ."-". time() . '.' . $file->getClientOriginalExtension();
        $request->file('image')->move("screenshot", $name);
        
        $amount = $request->amount;
        $status = 'submitted';
        $recharge = Recharge::create([
            'user_id' => $user_id,
            'amount' => $amount,
            'status' => $status,
            'image' => $name,
            'package_id' => $package->id,
        ]);
        if($recharge){
            $user = User::find($user_id);
            $user->status = $status;
            if($user->save()){
                return redirect()->route('home');
            }
        }

    }
    public function view_recharge(){
        return view('recharge');
    }
    public function change_status($id){
        $status = 'approved';
        $deposit = Recharge::find($id);
        $deposit->status = $status;
        $deposit->save();

        $user_deposits = Recharge::where('user_id',$deposit->user_id)->where('status','!=',$status)->sum('amount');
        if($user_deposits <= 0){
            $user = User::find($deposit->user_id);
            $user->status = 'active';
            $user->save();
        }

        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($package_id)
    {
        $min = Package::find($package_id)->min;
        $max = Package::find($package_id)->max;
        return view('deposit')->with('package_id',$package_id)->with('min',$min)->with('max',$max);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user_id = Auth::user()->id;
        
        $file = $request->file('image');
        $name = $user_id ."-". time() . '.' . $file->getClientOriginalExtension();
        $request->file('image')->move("screenshot", $name);
        
        $amount = $request->amount;
        $status = 'submitted';
        $recharge = Recharge::create([
            'user_id' => $user_id,
            'amount' => $amount,
            'status' => $status,
            'image' => $name,
            'package_id' => $request->package_id,
        ]);
        if($recharge){
            $user = User::find($user_id);
            $user->status = $status;
            if($user->save()){
                return redirect()->route('home');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function show(Recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function edit(Recharge $recharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recharge $recharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recharge $recharge)
    {
        //
    }
}
