<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\User;
use App\Models\Wallet;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $users = User::all();
        return view('user',compact('users'));
    }
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
        $user=new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = $request->password;
       $result=$user->save();
       $wallet=new Wallet;
       $wallet->amount=0;
       $wallet->user_id=$user->id;
       $wallet->save();
       if($result){
        return  response()->json(['user-id'=>
        $user->id,'status'=> 200]
            );
            }else{
                return "Error";
            }
    }
 public function Login(Request $request)
 {
    $user=User::where('phone',   $request->phone)->get();
    if ($user->isEmpty()) {
      return "The number is not registered";
    }else
    { 
         $f=User::where('phone',   $request->phone)->where('password',    $request->password)->get();
         if ($f->isEmpty()) {
                return "The number or password is incorrect";
        
        }else{
            return $f;
        }
  }
  return "Error";
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
