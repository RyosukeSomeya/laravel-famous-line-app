<?php

namespace App\Http\Resources;

use App\Title;
use App\SlamdunkCharacter;
use Illuminate\Http\Resources\Json\JsonResource;

class SlamdunkLine extends JsonResource
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
            'title'      => Title::getTitle($this->title_id),
            'character'  => SlamdunkCharacter::getCharacterName($this->slamdunk_character_id),
            'famousline' => $this->famousline,
        ];
    }
}
