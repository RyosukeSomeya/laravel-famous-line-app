@extends('layouts.main')
@section('title')
{{ $title_info->title }}キャラクター一覧
@endsection
@section('header')
@component('components.header')
@slot('page_title')
{{ $title_info->title }}キャラクター一覧
@endslot
@endcomponent
@endsection

@section('content')
@include('components.all_character')
@endsection

@section('footer')
@include('components.footer')
@endsection