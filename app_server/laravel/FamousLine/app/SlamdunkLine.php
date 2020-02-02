<?php
/**
 * [API]スラムダンク名言JSON生成モデルクラス
 *
 *
 * @access public
 * @author Ryosuke Someya <ryosuke.some0618@gmail.com>
 * @copyright  Ryosuke Someya
 * @package Model
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class SlamdunkLine extends Model
{
    //　キャラクターテーブルとのリレーション
    public function character()
    {
        return $this->belongsTo('App\SlamdunkCharacter',  'slamdunk_character_id', 'character_id');
    }

    // タイトルテーブルとのリレーション
    public function title()
    {
        return $this->belongsTo('App\Title');
    }

    /**
     * すべての名言リストを返却
     *
     * @return Object
     */
    public static function getAllLines()
    {
        $slamdunk_lines = SlamdunkLine::all();

        return $slamdunk_lines;
    }

    /**
     * 個別の名言を返却
     *
     * @param  int  $id
     * @return Object
     */
    public static function getLine($id)
    {
        $slamdunk_line = SlamdunkLine::find($id);

        return $slamdunk_line;
    }
}
