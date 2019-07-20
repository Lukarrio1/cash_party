<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\party;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PartyResource;
use App\Apiusers;


class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parties = party::paginate(5);
      return PartyResource::collection($parties);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $key= Apiusers::where('apikey',$request->key)->first();
        if(empty($key)){
            return json_encode(['status'=>401]);
        }else{
        $party = new party;
        $party->title = $request->title;
        $party->user_id= $key->id;
        $party->description = $request->description;
        $party->price =$request->price;
        $party->img =$request->img;
        $party->save();
         return  new PartyResource(['status'=>201]);
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
        $party = party::findOrFail($id);
        return new PartyResource($party);
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
        $key= Apiusers::where('apikey',$request->key)->first();
        if(empty($key)){
            return  new PartyResource(['status'=>401]);
        }else{
        $party = party::findOrFail($id);
        $party->title = $request->title;
        $party->description = $request->description;
        $party->price =$request->price;
        $party->save();
        return  new PartyResource(['status'=>200]);
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
        $party = party::findOrFail($id);
        $user= Apiusers::find($party->user_id);
        if($party->user_id!=$user->id){
            return json_encode(['status'=>401]);
        }else{
        Storage::delete('public/img/' .$party->img);
        $party->delete();
        return json_encode(['status'=>200]);
        }
        
    }
}
