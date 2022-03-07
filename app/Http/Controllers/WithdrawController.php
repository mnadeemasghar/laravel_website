<?php

namespace App\Http\Controllers;

use App\Models\Earning;
use App\Models\Recharge;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function pending(){
        return view('admin.withdraws.index')->with('withdraws',Withdraw::where('status','=','pending')->get());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.withdraws.index')->with('withdraws',Withdraw::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $freeze_amount = Recharge::where('user_id',$user_id)->sum('amount');
        $total_earnings = Earning::where('user_id',$user_id)->sum('amount');
        $withdraw_requested_amount = Withdraw::where('user_id',$user_id)->where('status','pending')->sum('amount');
        $withdraw_approved_amount = Withdraw::where('user_id',$user_id)->where('status','approved')->sum('amount');
        $net_pending_earnings = $total_earnings - $withdraw_requested_amount - $withdraw_approved_amount;
        $usdt = Auth::user()->usdt;
        $withdraw_history = Withdraw::where('user_id',$user_id)->get();
        return view('withdraw')
                ->with('usdt',$usdt)
                ->with('withdraw_history',$withdraw_history)
                ->with('freeze_amount',$freeze_amount)
                ->with('total_earnings',$total_earnings)
                ->with('net_pending_earnings',$net_pending_earnings)
                ->with('withdraw_request',$withdraw_requested_amount)
                ->with('withdraw_approve',$withdraw_approved_amount);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        
        $user = User::find($user_id);
        $user->usdt = $request->usdt;
        $user->save();

        $amount_requested = $request->amount;

        Withdraw::create([
            'user_id' => $user_id,
            'amount' => $amount_requested,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('message','Withdraw Request Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function show(Withdraw $withdraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdraw $withdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdraw $withdraw)
    {
        $withdraw = $withdraw->first();
        $withdraw->update($request->except("_token"));
        $withdraw->save();

        return redirect()->back()->with('message','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdraw $withdraw)
    {
        //
    }
}
