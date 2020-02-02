<?php
/**
 * [API]ジョジョ名言JSON生成モデルクラス
 *
 *
 * @access public
 * @author Ryosuke Someya <ryosuke.some0618@gmail.com>
 * @copyright  Ryosuke Someya
 * @package Model
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class JojoLine extends Model
{
    /**
     * すべての名言リストを返却
     *
     * @return Object
     */
    public static function getAllLines()
    {
        $jojo_lines = JojoLine::all();

        return $jojo_lines;
    }

    /**
     * 個別の名言を返却
     *
     * @param  int  $id
     * @return Object
     */
    public static function getLine($id)
    {
        $jojo_line = JojoLine::find($id);

        return $jojo_line;
    }

    /**
     * 名言の数を返却
     *
     * @param  int  $id
     * @return Object
     */
    public static function countLine()
    {
        $jojo_line_count = JojoLine::all()->count();

        return $jojo_line_count;
    }
}
