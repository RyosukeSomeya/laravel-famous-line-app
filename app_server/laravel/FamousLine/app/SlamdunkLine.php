<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlamdunkLine extends Model
{
    public function getCharacter()
    {
        return $this->belongsTo('App\SlamdunkCharacter', 'slamdunk_character_id');
    }

    public function getLines()
    {
        $array = [];
        foreach ($this as $line) {
            $line->getCharacter;
            var_dump($line->getCharacter);
            exit;
        }
    }
}
