<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\WalletAdmin;

class AdminsController extends Controller
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
        //
    }

    public function LoginAdmin(Request $request)
    {
       
       $admin=Admin::where('phone',   $request->phone)->get();
      
       if ($admin->isEmpty()) {
         return "The number is not registered";
       }else
       { 
            $f=Admin::where('phone',   $request->phone)->where('password',    $request->password)->get();
            if ($f->isEmpty()) {
                   return "The number or password is incorrect";
           
           }else{
               return $f;
           }
       
     
     }
     return "Error";
   
    
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $admin=new User;
    //     $admin->name = $request->name;
    //     $admin->phone = $request->phone;
    //     $admin->password = $request->password;
    //    $result=$admin->save();
    //    $wallet=new WalletAdmin;
    //    $wallet->amount=0;
    //    $wallet->admin_id=$admin->id;
    //    $wallet->save();
    //    if($result){
    //     return  response()->json(['admin-id'=>
    //     $admin->id,'status'=> 200]
    //         );
    //         }else{
    //             return "Error";
    //         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
