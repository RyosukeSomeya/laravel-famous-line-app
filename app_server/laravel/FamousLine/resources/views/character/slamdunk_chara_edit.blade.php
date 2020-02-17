@extends('layouts.main')
@section('title', $title_info->title . 'のキャラクター作成')

@section('header')
@component('components.header')
@slot('page_title')
<a href="/{{ $title_info->path }}"><span class="font-smaller">{{ $title_info->title }}</span></a><br>
キャラクターを新規作成
@endslot
@endcomponent
@endsection

@section('content')
<form action="/slamdunkcharacters/{{ $character->id }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="title_id" value="{{ $title_info->id }}">
    <p>キャラクター名: <input type="text" name="character_name" value="{{ $character->character_name }}"></p>

    <div class="mt-2">
        <input class="btn btn-primary " type="submit" value="更新">
    </div>
</form>
@endsection

@section('footer')
@include('components.footer')
@endsection