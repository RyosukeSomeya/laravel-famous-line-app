<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GundamCharacter extends Model
{
    public static function getCharacter($id)
    {
        return GundamCharacter::find($id);
    }

    public static function getCharacterName($id)
    {
        return GundamCharacter::find($id)->character_name;
    }

    public static function getCharacters()
    {
        return GundamCharacter::all();
    }

    public static function getCharactersCount()
    {
        return GundamCharacter::all()->count();
    }
}
