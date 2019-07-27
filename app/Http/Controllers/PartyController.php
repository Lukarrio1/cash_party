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
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $party = new party;
        $party->title = $request->title;
        $party->user_id= $key->id;
        $party->description = $request->description;
        $party->price =$request->price;
        $party->img =$filenametostore;
        $path = $request->file('img')->storeAs('public/poster', $filenametostore);
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
    public function update(Request $request,$id)
    {
        $key= Apiusers::where('apikey',$request->key)->first();
        if(empty($key)){
            return json_encode(['status'=>401]);
        }else{
            if($request->file('img')==null){
                $party = party::findOrFail($id);
                $party->title = $request->title;
                $party->user_id= $key->id;
                $party->description = $request->description;
                $party->price =$request->price;
                $path = $request->file('img')->storeAs('public/poster', $filenametostore);
                $party->save();
                 return  new PartyResource(['status'=>201]);
            }else{
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $party = party::findOrFail($id);
                $delete =Storage::delete('public/poster/' .$party->img);
                $party->title = $request->title;
                $party->user_id= $key->id;
                $party->description = $request->description;
                $party->price =$request->price;
                $party->img =$filenametostore;
                $path = $request->file('img')->storeAs('public/poster', $filenametostore);
                $party->save();
                 return  new PartyResource(['status'=>201]);
            }
      
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
        $delete=Storage::delete('public/poster/' .$party->img);
        $party->delete();
        return new PartyResource(['status'=>200]);

    }
}
