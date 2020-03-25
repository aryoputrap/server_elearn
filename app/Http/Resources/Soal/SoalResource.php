<?php

namespace App\Http\Resources\Soal;

use Illuminate\Http\Resources\Json\JsonResource;

class SoalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'gambar'            => $this->gambar,
            'soal'              => $this->soal,
            'jawaban_a'         => $this->jawaban_a,
            'jawaban_b'         => $this->jawaban_b,
            'jawaban_c'         => $this->jawaban_c,
            'jawaban_d'         => $this->jawaban_d,
            'jawaban_e'         => $this->jawaban_e,
            'kunci_jawaban'     => $this->kunci_jawaban,
        ];
    }
}