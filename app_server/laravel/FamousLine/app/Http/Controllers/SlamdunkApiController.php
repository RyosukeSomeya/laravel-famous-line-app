<?php
/**
 * [API]スラムダンク名言JSON返却APIコントローラークラス
 *
 * CRUD処理に関してはReadのみとし、　新規作成、更新、削除に関しては
 * APIとしては提供しない。
 *
 * @access public
 * @author Ryosuke Someya <ryosuke.some0618@gmail.com>
 * @copyright  Ryosuke Someya
 * @package Controller
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SlamdunkLine as ResourcesSlamdunkLine;
use App\SlamdunkLine;


class SlamdunkApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slamdunk_lines = SlamdunkLine::getAllLines();

        return ResourcesSlamdunkLine::collection($slamdunk_lines);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // idをチェックするバリデーションを追加する
        //

        return new ResourcesSlamdunkLine(SlamdunkLine::getLine($id));
    }
}
