@extends('layouts.main')

@section('header')
    @component('components.header')
        @slot('page_title')
        名言一覧
        @endslot
    @endcomponent
@endsection

@section('content')
    @include('components.all_linelist')
@endsection

@section('footer')
    @include('components.footer')
@endsection