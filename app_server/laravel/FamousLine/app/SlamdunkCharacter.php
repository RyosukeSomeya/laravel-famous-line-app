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

    public static function getCharacter($id)
    {
        return SlamdunkCharacter::find($id);
    }

    public static function getCharacterName($id)
    {
        return SlamdunkCharacter::find($id)->character_name;
    }

    public static function getCharacters()
    {
        return SlamdunkCharacter::all();
    }

    public static function getCharactersCount()
    {
        return SlamdunkCharacter::all()->count();
    }
}
