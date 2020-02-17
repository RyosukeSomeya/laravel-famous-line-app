<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlamdunkCharacter;
use App\Title;

class SlamdunkCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = SlamdunkCharacter::getCharacters();
        return view('character.index', [
            'characters' => $characters,
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
        return view('character.slamdunk_chara_create', [
            'title_info' => $title_info
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SlamdunkCharacter $chara)
    {
        $chara->character_name        = $request->character_name;
        $chara->character_id = SlamdunkCharacter::getCharactersCount() + 1;
        $chara->title_id              = $request->title_id;
        $chara->save();
        return redirect('/slamdunkcharacters');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = SlamdunkCharacter::getCharacter($id);
        $title_info = Title::getTitleInfo(Title::SLAM_DUNK_CODE);

        return view('character.slamdunk_chara_edit', [
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
        $character = SlamdunkCharacter::getCharacter($id);
        $character->character_name = $request->character_name;
        $character->save();
        return redirect('/slamdunkcharacters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chara = SlamdunkCharacter::getCharacter($id);
        $chara->delete();

        return redirect('/slamdunkcharacters');
    }
}
