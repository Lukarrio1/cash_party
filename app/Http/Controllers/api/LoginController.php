<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apiusers;
use App\Http\Resources\PartyResource;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {   
    $this->validate($request,[
        'email'=>'unique:apiusers'
    ]);
        $user = new Apiusers;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $length = 10;
        $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
        $user->apikey = $randomletter;
        $user->save();
        return  new PartyResource(['status'=>201]);
    }

    public function login(Request $request){
        $user= Apiusers::where('email',$request->email)->first();
        if(!empty($user)){
            if(Hash::check($request->password,$user->password)){
                return new PartyResource($user);
            }else{
                return new PartyResource(['status'=>403]);
            }
        }
    }

    public function user($key){
        $user = Apiusers::where('apikey',$key)->first();
        $res = empty($user)?['status'=>403]:$user;
        return new PartyResource($res);
    }
    
}
