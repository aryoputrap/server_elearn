<?php

namespace App\Http\Controllers\Api\cc1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cc1;
use App\Http\Resources\CCT\cc1resource;
USE Illuminate\Http\Response;

class cc1controller extends Controller
{
    public function index()
    {
        return cc1resource::collection(cc1::latest()->get());
    }
    
    
    public function allpost(Request $request)
    {
        $soal = cc1::create($request->all());
        return response(new cc1resource($soal), Response::HTTP_CREATED)->json(['surat' => 'selamat']);
    }

    public function show(cc1 $soal)
    {
        return new cc1resource($soal);
    }
}
