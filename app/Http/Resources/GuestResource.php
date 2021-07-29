<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestResource extends JsonResource
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
            'id' => $this->id,
            'student' => new StudentResource($this->whenLoaded('student')),
            'reservation' => new ReservationResource($this->whenLoaded('reservation')),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'mothers_lastname' => $this->mothers_lastname,
        ];
    }
}
