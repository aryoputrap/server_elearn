<?php

namespace App\Http\Resources\CCT;

use Illuminate\Http\Resources\Json\JsonResource;

class cc1resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'             => $this->id,
            'kelas'          => $this->kelas,
            'nik'            => $this->nik,
            'nama'           => $this->nama,
            'tier11'         => $this->tier11,
            'tier12'         => $this->tier12,
            'tier13'         => $this->tier13,
            'tier13_e'       => $this->tier13_e,
            'tier14'         => $this->tier14,
            'tier21'         => $this->tier21,
            'tier31'         => $this->tier31,
            'tier32'         => $this->tier32,
            'tier33'         => $this->tier33,
            'tier33_e'       => $this->tier33_e,
            'tier34'         => $this->tier34,
            'tier41'         => $this->tier41,
            'tier42'         => $this->tier42,
            'tier44'         => $this->tier44,
            'tier51'         => $this->tier51,
            'tier52'         => $this->tier52,
            'tier53'         => $this->tier53,
            'tier61'         => $this->tier61,
            'tier71'         => $this->tier71,
            'tier72'         => $this->tier72,
            'tier73'         => $this->tier73,
            'tier73_e'       => $this->tier73_e,
            'tier74'         => $this->tier74,
        ];
    }
}
