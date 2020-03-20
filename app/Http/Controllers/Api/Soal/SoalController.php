<?php

namespace App\Http\Controllers\Api\Soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\soal;
use App\Http\Resources\Soal\SoalResource;
USE Illuminate\Http\Response;

class SoalController extends Controller
{
    public function index()
    {
        return SoalResource::collection(Soal::latest()->get());
    }
    
    
    public function store(Request $request)
    {
        $soal = soal::create($request->all());
        return response(new SoalResource($soal), Response::HTTP_CREATED);
    }

    public function show(soal $soal)
    {
        return new SoalResource($soal);
    }
}
