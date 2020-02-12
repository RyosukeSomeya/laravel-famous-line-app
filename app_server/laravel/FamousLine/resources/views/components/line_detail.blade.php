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
@include('components.line_unit')
@endsection

@section('footer')
@include('components.footer')
@endsection