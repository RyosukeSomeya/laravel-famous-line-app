@extends('layouts.main')
@section('title', $slamdunk_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<a href="/{{ $slamdunk_line->title->path }}"><span class="font-smaller">{{ $slamdunk_line->title->title }}</span></a><br>
{{ $slamdunk_line->character->character_name }}の名言
@endslot
@endcomponent
@endsection

@section('content')
<form action="{{ url('slamdunk/'. $slamdunk_line->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="title_id" value="{{ $slamdunk_line->title_id }}">
    <input type="hidden" name="slamdunk_character_id" value="{{ $slamdunk_line->slamdunk_character_id }}">
    <div>
        <textarea name='famousline' cols="30" rows="4">{{ $slamdunk_line->famousline }}</textarea>
    </div>
    <div>
        <input class="btn btn-primary " type="submit" value="確定">
    </div>
</form>
@endsection

@section('footer')
@include('components.footer')
@endsection