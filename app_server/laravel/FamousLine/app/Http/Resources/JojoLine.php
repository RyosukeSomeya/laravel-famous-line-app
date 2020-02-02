<?php

namespace App\Http\Resources;

use App\Title;
use App\JojoCharacter;

use Illuminate\Http\Resources\Json\JsonResource;

class JojoLine extends JsonResource
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
            'character'  => JojoCharacter::getCharacterName($this->jojo_character_id),
            'famousline' => $this->famousline,
        ];
    }
}
