<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GundamLine;
use App\GundamCharacter;
use App\Title;

class GundamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 全名言を取得
        $gundam_row_lines = GundamLine::getAllLines();
        $gundam_lines = json_decode($gundam_row_lines);
        $title_info = Title::getTitleInfo(Title::GUNDAM_CODE);

        return view('gundam.index', [
            'famous_lines' => $gundam_lines,
            'title_info'   => $title_info
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gundam_characters = GundamCharacter::getCharacters();
        $title_info = Title::getTitleInfo(Title::GUNDAM_CODE);

        return view('gundam.line_create', [
            'gundam_characters' => $gundam_characters,
            'title_info'        => $title_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, GundamLine $line)
    {
        $line->famousline          = $request->famousline;
        $line->gundam_character_id = $request->gundam_character_id;
        $line->title_id            = $request->title_id;
        $line->save();
        return redirect('/gundam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gundam_line = GundamLine::getLine($id);

        return view('gundam.line_detail', [
            'gundam_line' => $gundam_line
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
        $gundam_line = GundamLine::getLine($id);

        return view('gundam.line_edit', [
            'gundam_line' => $gundam_line
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
        $line = GundamLine::getLine($id);
        $line->famousline = $request->famousline;
        $line->save();
        return redirect('/gundam/' . $line->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $line = GundamLine::getLine($id);
        $line->delete();

        return redirect('/gundam');
    }
}
