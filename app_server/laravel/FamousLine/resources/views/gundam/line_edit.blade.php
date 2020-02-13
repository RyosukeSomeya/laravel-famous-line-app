@extends('layouts.main')
@section('title', $gundam_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<a href="/{{ $gundam_line->title->path }}"><span class="font-smaller">{{ $gundam_line->title->title }}</span></a><br>
{{ $gundam_line->character->character_name }}の名言
@endslot
@endcomponent
@endsection

@section('content')
<form action="{{ url('gundam/'. $gundam_line->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="title_id" value="{{ $gundam_line->title_id }}">
    <input type="hidden" name="gundam_character_id" value="{{ $gundam_line->gundam_character_id }}">
    <div>
        <textarea name='famousline' cols="30" rows="4">{{ $gundam_line->famousline }}</textarea>
    </div>
    <div>
        <input class="btn btn-primary " type="submit" value="確定">
    </div>
</form>
@endsection

@section('footer')
@include('components.footer')
@endsection