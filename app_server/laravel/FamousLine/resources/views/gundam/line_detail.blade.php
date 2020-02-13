@extends('layouts.main')
@section('title', $gundam_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<div class="clearfix">
    <a href="/{{ $gundam_line->title->path }}"><span class="font-smaller">{{ $gundam_line->title->title }}</span></a><br>
    {{ $gundam_line->character->character_name }}の名言
    <a class="btn btn-primary float-right" href="/gundam/create">新規追加</a>
</div>
@endslot
@endcomponent
@endsection

@section('content')
@include('gundam.line_unit')
@endsection

@section('footer')
@include('components.footer')
@endsection