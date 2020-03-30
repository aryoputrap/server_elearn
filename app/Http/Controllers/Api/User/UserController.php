<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User\UserResource;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::latest()->get());
    }

    public function store(Request $request) 
    {
        $user=User::create($request->all());
        if($user){
            return response() ->json([
                'status' => 201,
                'pesan' => 'Data Terkirim'
            ]);
        } else {
            return response() -> json([
                'status' => 404,
                'pesan' => 'maaf anda gagal'
            ]);
        }
    }

    public function login(Request $request) 
    {
        if(!Auth::attempt(['name' => $request->name, 'password' => $request->password])) 
        {
            return response()->json([
                'status' => 401,
                'pesan' => 'Login gagal! tolong periksa kembali username dan password'
            ]);
        }else if(Auth::attempt(['name' => $request->name, 'password' => $request->password])) 
        {
            return response()->json([
                'status' => 201,
                'pesan' => 'berhasil login'
            ]);
        }
    }

    public function show($android_id)
    {
        $user = User::where('android_id', $android_id)->first();
        return new UserResource($user);
    }
}
