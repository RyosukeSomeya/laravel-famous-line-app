<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GundamLine extends JsonResource
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
            'id'         => $this->id,
            'title'      => $this->title_id,
            'character'  => $this->gundam_character_id,
            'famousline' => $this->famousline,
        ];
    }
}
