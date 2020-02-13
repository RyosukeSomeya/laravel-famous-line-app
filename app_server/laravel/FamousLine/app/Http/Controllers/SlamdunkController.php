<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlamdunkLine;
use App\SlamdunkCharacter;
use App\Title;

class SlamdunkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 全名言を取得
        $slamdunk_row_lines = SlamdunkLine::getAllLines();
        $slamdunk_lines = json_decode($slamdunk_row_lines);

        return view('slamdunk.index', [
            'famous_lines' => $slamdunk_lines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slamdunk_characters = SlamdunkCharacter::getCharacters();
        $title_info = Title::getTitleInfo(Title::SLAM_DUNK_CODE);

        return view('slamdunk.line_create', [
            'slamdunk_characters' => $slamdunk_characters,
            'title_info' => $title_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SlamdunkLine $line)
    {
        $line->famousline            = $request->famousline;
        $line->slamdunk_character_id = $request->slamdunk_character_id;
        $line->title_id              = $request->title_id;
        $line->save();
        return redirect('/slamdunk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slamdunk_line = SlamdunkLine::getLine($id);

        return view('slamdunk.line_detail', [
            'slamdunk_line' => $slamdunk_line
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slamdunk_line = SlamdunkLine::getLine($id);

        return view('slamdunk.line_edit', [
            'slamdunk_line' => $slamdunk_line
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $line = SlamdunkLine::getLine($id);
        $line->famousline = $request->famousline;
        $line->save();
        return redirect('slamdunk/' . $line->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $line = SlamdunkLine::getLine($id);
        $line->delete();

        return redirect('/slamdunk');
    }
}
