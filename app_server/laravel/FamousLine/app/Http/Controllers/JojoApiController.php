<?php
/**
 * [API]ジョジョ名言JSON返却APIコントローラークラス
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
use App\Http\Resources\JojoLine as ResourcesJojoLine;
use App\JojoLine;

class JojoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jojo_lines = JojoLine::getAllLines();

        return ResourcesJojoLine::collection($jojo_lines);
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
        $jojo_lines_count = JojoLine::countLine();

        if ($id >= 1 && $jojo_lines_count >= $id) {
            return new ResourcesJojoLine(JojoLine::getLine($id));
        } else {
            return response()->json(['error' => '不正なリクエストです。']);
        }
    }
}
