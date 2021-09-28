<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\User;
use App\UserInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function user (){
        $user = User::with('roles')->get();
        return UserResource::collection($user);
    }

    public function usercompany (Request $request){
        $user = User::with('roles')->where('company_id', $request->id)->get();
        return UserResource::collection($user);
    }

    public function usershow (Request $request){
        $user = User::with('roles')->where('id', $request->id)->first();    
        return new UserResource($user);
    }

    public function create_user (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'company_id' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $request['password']=Hash::make($request['password']);
        $request['api_token'] = Str::random(60);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'api_token' => $request->api_token, 
            'role_id' => '3',
            'company_id' => $request->company_id,
        ]);
        UserInformation::create([
            'username' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'user_id' => $user->id,
        ]);
        $response = ['user' => $user];
        return response($response, 200);
    }

    public function edit_user (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::find($request->uid);
        $user->name = $request['name'];
        $user->email = $request['email'];
        if($request['password'] != null){
            $request['password'] = Hash::make($request['password']);
            $user->password = $request['password'];
        }
        $user->role_id = $request['role_id'];
        $user->save();
        $response = ['user' => $user];
        return response($response, 200);
    }

    public function delete_user (Request $request){
        $user = User::find($request->id);
        $user->delete();
        $response =  ['message' => 'User Have Been Successfully Deleted!'];
        return response($response, 200);
    }
}
