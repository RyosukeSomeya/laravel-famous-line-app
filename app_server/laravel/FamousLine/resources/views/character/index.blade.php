@extends('layouts.main')
@section('title', 'スラムダンクキャラクター一覧')
@section('header')
@component('components.header')
@slot('page_title')
スラムダンクキャラクター一覧
@endslot
@endcomponent
@endsection

@section('content')
@include('components.all_character')
@endsection

@section('footer')
@include('components.footer')
@endsection