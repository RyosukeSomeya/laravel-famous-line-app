<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlamdunkCharacter extends Model
{
    public function lines()
    {
        // 名言とのリレーション
        return $this->hasMany('App\SlamdunkLine', 'slamdunk_character_id', 'character_id');
    }
}
