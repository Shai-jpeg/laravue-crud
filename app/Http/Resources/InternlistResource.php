<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InternlistResource extends JsonResource
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
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'date_of_birth' => $this->date_of_birth,
            'contact_number' => $this->contact_number,
            'email_address' => $this->email_address,
            'address' => $this->address,
            'department' => $this->department,
            'position' => $this->position,
            'intern_start' => $this->intern_start,
            'intern_end' => $this->intern_end,
            'required_hours' => $this->required_hours,

        ];
    }
}