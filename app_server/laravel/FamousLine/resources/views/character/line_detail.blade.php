@extends('layouts.main')
@section('title', $slamdunk_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<div class="clearfix">
    <a href="/{{ $slamdunk_line->title->path }}"><span class="font-smaller">{{ $slamdunk_line->title->title }}</span></a><br>
    {{ $slamdunk_line->character->character_name }}の名言
    <a class="btn btn-primary float-right" href="/slamdunk/create">新規追加</a>
</div>
@endslot
@endcomponent
@endsection

@section('content')
@include('slamdunk.line_unit')
@endsection

@section('footer')
@include('components.footer')
@endsection