<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GundamCharacter extends Model
{
    public static function getCharacterName($id)
    {
        return GundamCharacter::find($id)->character_name;
    }

    public static function getCharacters()
    {
        return GundamCharacter::all();
    }
}
