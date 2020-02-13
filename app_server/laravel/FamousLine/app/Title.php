<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    const SLAM_DUNK_CODE = 1;
    const JOJO_CODE      = 2;
    const GUNDAM_CODE    = 3;
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
