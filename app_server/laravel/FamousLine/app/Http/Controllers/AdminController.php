<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlamdunkLine;
use App\GundamLine;
use App\JojoLine;

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
        $slamdunk_row_lines = SlamdunkLine::getAllLines();
        $slamdunk_lines = json_decode($slamdunk_row_lines);

        $jojo_row_lines = JojoLine::getAllLines();
        $jojo_lines = json_decode($jojo_row_lines);

        $gundam_row_lines = GundamLine::getAllLines();
        $gundam_lines = json_decode($gundam_row_lines);

        return view('admin.index', [
            'slamdunk_lines' => $slamdunk_lines,
            'jojo_lines'     => $jojo_lines,
            'gundam_lines'   => $gundam_lines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
