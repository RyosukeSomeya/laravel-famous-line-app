<?php
/**
 * [API]ガンダム名言JSON返却APIコントローラークラス
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

use App\Http\Controllers\Controller;
use App\Http\Resources\GundamLine as ResourcesGundamLine;
use App\GundamLine;

class GundamApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gundam_lines = GundamLine::getAllLines();

        return ResourcesGundamLine::collection($gundam_lines);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 登録されている名言の数
        $gundam_lines_count = GundamLine::countLine();

        if ($id >= 1 && $gundam_lines_count >= $id) {
            return new ResourcesGundamLine(GundamLine::getLine($id));
        } else {
            return response()->json(['error' => '不正なリクエストです。']);
        }
    }
}
