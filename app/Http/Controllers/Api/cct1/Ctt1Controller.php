<?php

namespace App\Http\Controllers\Api\cct1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cct1;
use App\Http\Resources\CTT\Cct1resource;
USE Illuminate\Http\Response;

class Ctt1Controller extends Controller
{
    public function index()
    {
        return Cct1resource::collection(cct1::latest()->get());
    }
    
    
    public function store(Request $request)
    {
        $ctt = cct1::create($request->all());
        return response(new cct1resource($ctt), Response::HTTP_CREATED);
    }

    public function show(ctt $ctt)
    {
        return new cct1resource($ctt);
    }
}
