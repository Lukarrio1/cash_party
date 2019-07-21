<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\json;
use App\sales;
use App\Apiusers as user;
use App\notification as notify;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sales::paginate(10);
        return json::collection($sales);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $key = $request->key;
       $sale = new sales;
       $user = user::where('apikey',$key)->first();
       if(empty($user)){
           return new json(['status'=>401]);
       }else{
        $notify = new notify;
        $notify->notification="A new ".$request->model."has been added";
        $sale->make = $request->make;
        $sale->year= $request->year;
        $sale->model = $request->model;
        $sale->cc_rating = $request->cc_ranting;
        $sale->num_seats = $request->num_seats;
        $sale->driver_side =$request->driver_side;
        $sale->body_style = $request->body_style;
        $sale->transmission= $request->transmission;
        $sale->condition = $request->condition;
        $sale->location= $request->location;
        $sale->color= $request->color;
        $sale->price=$request->price;
        $notify->save();
        $sale->save();
        return new json(['status'=>201]);
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
        $car = sales::find($id);
        return new json($car);
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
        
       $key = $request->key;
       $sale = sales::find($id);
       $user = user::where('apikey',$key)->first();
       if(empty($user)){
           return new json(['status'=>401]);
       }else{
        $sale->make = $request->make;
        $sale->year= $request->year;
        $sale->model = $request->model;
        $sale->cc_rating = $request->cc_ranting;
        $sale->num_seats = $request->num_seats;
        $sale->driver_side =$request->driver_side;
        $sale->body_style = $request->body_style;
        $sale->transmission= $request->transmission;
        $sale->condition = $request->condition;
        $sale->location= $request->location;
        $sale->color= $request->color;
        $sale->price=$request->price;
        $sale->save();
        return new json(['status'=>201]);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = sales::find($id);
        $car->delete();
        return new json(['status'=>201]);
    }


    public function notificatonUpdate(Request $request,$id){
       $key = $request->key;
       $user = user::where('apikey',$key)->first();
       if(empty($user)){
           return new json(['status'=>401]);
       }else{ 
        $notify = notify::find($id);
        $notify->clicked = 0;
        $notify->save();
        return new json(['status'=>200]);
     }
    }

    public function notificatons(){
    $notification = notify::OrderBy('created_at','desc')->get();
    return new json($notification);
    }
    
 
}
