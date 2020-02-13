@extends('layouts.main')
@section('title', $jojo_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<a href="/{{ $jojo_line->title->path }}"><span class="font-smaller">{{ $jojo_line->title->title }}</span></a><br>
{{ $jojo_line->character->character_name }}の名言
@endslot
@endcomponent
@endsection

@section('content')
<form action="{{ url('jojo/'. $jojo_line->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="title_id" value="{{ $jojo_line->title_id }}">
    <input type="hidden" name="jojo_character_id" value="{{ $jojo_line->jojo_character_id }}">
    <div>
        <textarea name='famousline' cols="30" rows="4">{{ $jojo_line->famousline }}</textarea>
    </div>
    <div>
        <input class="btn btn-primary " type="submit" value="確定">
    </div>
</form>
@endsection

@section('footer')
@include('components.footer')
@endsection