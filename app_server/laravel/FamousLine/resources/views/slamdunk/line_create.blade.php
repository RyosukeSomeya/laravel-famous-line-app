@extends('layouts.main')
@section('title', $title_info->title . 'の名言作成')

@section('header')
@component('components.header')
@slot('page_title')
<a href="/{{ $title_info->path }}"><span class="font-smaller">{{ $title_info->title }}</span></a><br>
名言を新規作成
@endslot
@endcomponent
@endsection

@section('content')
<form action="/slamdunk" method="post">
    @csrf
    <input type="hidden" name="title_id" value="{{ $title_info->id }}">
    <p>キャラクターを選択</p>
    <select name="slamdunk_character_id">
        @foreach($slamdunk_characters as $character)
        <option value="{{ $character->character_id }}">{{ $character->character_name }}</option>
        @endforeach
    </select>
    <a class="d-inline-block ml-2 btn btn-primary btn-sm" href="/slamdunkcharacters">キャラクターを追加</a>
    <div class="mt-2">
        <textarea name='famousline' cols="30" rows="4"></textarea>
    </div>
    <div>
        <input class="btn btn-primary " type="submit" value="追加する">
    </div>
</form>
@endsection

@section('footer')
@include('components.footer')
@endsection