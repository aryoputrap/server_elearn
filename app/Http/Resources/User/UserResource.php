<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'            => $this->id,
            'android_id'    => $this->android_id,
            'sekolah'       => $this->sekolah,
            'email'         => $this->email,
            'name'          => $this->name,
            'status'        => $this->status,
            'kelas'         => $this->kelas,
            'nik'           => $this->nik,
        ];
    }
}
