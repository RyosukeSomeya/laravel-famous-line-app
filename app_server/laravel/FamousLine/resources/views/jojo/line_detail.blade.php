@extends('layouts.main')
@section('title', $jojo_line->character->character_name . 'の名言')

@section('header')
@component('components.header')
@slot('page_title')
<div class="clearfix">
    <a href="/{{ $jojo_line->title->path }}"><span class="font-smaller">{{ $jojo_line->title->title }}</span></a><br>
    {{ $jojo_line->character->character_name }}の名言
    <a class="btn btn-primary float-right" href="/jojo/create">新規追加</a>
</div>
@endslot
@endcomponent
@endsection

@section('content')
@include('jojo.line_unit')
@endsection

@section('footer')
@include('components.footer')
@endsection