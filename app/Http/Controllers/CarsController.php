<?php

namespace App\Http\Controllers;
use App\Models\Cars;

use Illuminate\Http\Request;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function getcars_user(Request $request)
     {
       $cars=Cars::where('user_id', 'LIKE',   $request->user_id )->get();
        return $cars;
     }
    public function store(Request $request)
    {
        $car=new Cars;
        $car->Country = $request->Country;
        $car->NumCar = $request->NumCar;
        $car->Type = $request->Type;
        $car->Color = $request->Color;
        $car->user_id = $request->user_id;
       $result=$car->save();
       if($result){
        return response()->json(['car-id'=>
        $car->id,'status'=> 200]
            );
            }else{
                return "Error";
            }
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
        $car=Cars::find($id);
        $car->delete();
    }
}
