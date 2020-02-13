<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JojoLine;
use App\JojoCharacter;
use App\Title;

class JojoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 全名言を取得
        $jojo_row_lines = JojoLine::getAllLines();
        $jojo_lines = json_decode($jojo_row_lines);

        return view('jojo.index', [
            'famous_lines' => $jojo_lines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jojo_characters = JojoCharacter::getCharacters();
        $title_info = Title::getTitleInfo(Title::JOJO_CODE);

        return view('jojo.line_create', [
            'jojo_characters' => $jojo_characters,
            'title_info'      => $title_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, JojoLine $line)
    {
        $line->famousline        = $request->famousline;
        $line->jojo_character_id = $request->jojo_character_id;
        $line->title_id          = $request->title_id;
        $line->save();
        return redirect('/jojo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jojo_line = JojoLine::getLine($id);

        return view('jojo.line_detail', [
            'jojo_line' => $jojo_line
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
        $jojo_line = JojoLine::getLine($id);

        return view('jojo.line_edit', [
            'jojo_line' => $jojo_line
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
        $line = JojoLine::getLine($id);
        $line->famousline = $request->famousline;
        $line->save();
        return redirect('/jojo/' . $line->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $line = JojoLine::getLine($id);
        $line->delete();

        return redirect('/jojo');
    }
}
