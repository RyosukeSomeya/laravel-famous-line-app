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
     * すべての名言リストをJSONで返却
     *
     * @return Json
     */
    public static function getAllSlamdunkLines()
    {
        $slamdunk_lines = SlamdunkLine::with(['character', 'title'])->get();

        $slamdunk_response = [];
        foreach ($slamdunk_lines as $slamdunk_line) {
            array_push($slamdunk_response, [
                "id"              => $slamdunk_line->id,
                "famousline"      => $slamdunk_line->famousline,
                "character_name"  => $slamdunk_line->character->character_name,
                "title"           => $slamdunk_line->title->title
            ]);
        }

        $slamdunk_json = json_encode($slamdunk_response, JSON_PRETTY_PRINT);

        return $slamdunk_json;
    }

    /**
     * 個別の名言をJSONで返却
     *
     * @param  int  $id
     * @return Josn
     */
    public static function getSlamdunkLine($id)
    {
        $slamdunk_line = SlamdunkLine::with(['character', 'title'])->find($id);

        $slamdunk_response = [
            "id"              => $slamdunk_line->id,
            "famousline"      => $slamdunk_line->famousline,
            "character_name"  => $slamdunk_line->character->character_name,
            "title"           => $slamdunk_line->title->title
        ];

        $slamdunk_json = json_encode($slamdunk_response, JSON_PRETTY_PRINT);

        return $slamdunk_json;
    }
}
