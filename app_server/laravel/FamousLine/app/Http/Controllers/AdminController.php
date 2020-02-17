<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlamdunkLine;
use App\GundamLine;
use App\JojoLine;
use App\Title;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 全名言を取得
        $slamdunk_row_lines  = SlamdunkLine::getAllLines();
        $slamdunk_lines      = json_decode($slamdunk_row_lines);
        $slamdunk_title_info = Title::getTitleInfo(Title::SLAM_DUNK_CODE);

        $jojo_row_lines  = JojoLine::getAllLines();
        $jojo_lines      = json_decode($jojo_row_lines);
        $jojo_title_info = Title::getTitleInfo(Title::JOJO_CODE);

        $gundam_row_lines  = GundamLine::getAllLines();
        $gundam_lines      = json_decode($gundam_row_lines);
        $gundam_title_info = Title::getTitleInfo(Title::GUNDAM_CODE);

        return view('admin.index', [
            'slamdunk_lines' => $slamdunk_lines,
            'jojo_lines'     => $jojo_lines,
            'gundam_lines'   => $gundam_lines,
            'slamdunk_title_info' => $slamdunk_title_info,
            'jojo_title_info' => $jojo_title_info,
            'gundam_title_info' => $gundam_title_info,
        ]);
    }
}
