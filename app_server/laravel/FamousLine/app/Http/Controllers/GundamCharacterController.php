<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GundamCharacter;
use App\Title;

class GundamCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = GundamCharacter::getCharacters();
        $title_info = Title::getTitleInfo(Title::GUNDAM_CODE);

        return view('character.index', [
            'characters' => $characters,
            'title_info' => $title_info,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title_info = Title::getTitleInfo(Title::SLAM_DUNK_CODE);
        return view('character.gundam_chara_create', [
            'title_info' => $title_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  GundamCharacter $chara)
    {
        $chara->character_name  = $request->character_name;
        $chara->character_id    = GundamCharacter::getCharactersCount() + 1;
        $chara->title_id        = $request->title_id;
        $chara->save();
        return redirect('/gundamcharacters');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = GundamCharacter::getCharacter($id);
        $title_info = Title::getTitleInfo(Title::GUNDAM_CODE);

        return view('character.gundam_chara_edit', [
            'character' => $character,
            'title_info' => $title_info
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
        $character = GundamCharacter::getCharacter($id);
        $character->character_name = $request->character_name;
        $character->save();
        return redirect('/gundamcharacters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chara = GundamCharacter::getCharacter($id);
        $chara->delete();

        return redirect('/gundamcharacters');
    }
}
