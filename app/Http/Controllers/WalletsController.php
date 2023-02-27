<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;

class WalletsController extends Controller
{
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
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wallet=Wallet::where('user_id',   $id)->first();
        return $wallet->amount;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function withdraw(Request $request)
    {
        $wallet=Wallet::where('user_id',   $request->user_id)->first();
        if($wallet->amount>$request->amount){
            $wallet->amount=$wallet->amount-$request->amount;
            $wallet->update();
            
            return  $wallet->amount;
        }else{
            return "no";
        }
    }
    public function deposit(Request $request)
    {
        $wallet=Wallet::where('user_id',   $request->user_id)->first();
       
            $wallet->amount=$wallet->amount+$request->amount;
            $wallet->update();
            return  $wallet->amount;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
