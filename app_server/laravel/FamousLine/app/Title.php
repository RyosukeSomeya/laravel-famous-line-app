<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    /**
     * タイトル情報を返却
     *
     * @param int $id
     * @return String
     */
    public static function getTitleInfo($id)
    {
        return Title::find($id);
    }
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
