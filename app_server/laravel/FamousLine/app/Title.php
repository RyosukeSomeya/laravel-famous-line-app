<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    /**
     * タイトル名を返却
     *
     * @param int $id
     * @return String
     */
    public static function getTitle($id)
    {
        return Title::find($id)->title;
    }
}
