<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JojoCharacter extends Model
{
    public static function getCharacterName($id)
    {
        return JojoCharacter::find($id)->character_name;
    }    //
}
