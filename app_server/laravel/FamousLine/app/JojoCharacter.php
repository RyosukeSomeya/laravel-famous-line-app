<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JojoCharacter extends Model
{
    public static function getCharacter($id)
    {
        return JojoCharacter::find($id);
    }
    public static function getCharacterName($id)
    {
        return JojoCharacter::find($id)->character_name;
    }

    public static function getCharacters()
    {
        return JojoCharacter::all();
    }

    public static function getCharactersCount()
    {
        return GundamCharacter::all()->count();
    }
}
