<?php

namespace App\Http\Resources\CTT;

use Illuminate\Http\Resources\Json\JsonResource;

class cct2resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
