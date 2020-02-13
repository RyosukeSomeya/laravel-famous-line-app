@extends('layouts.main')
@section('title', 'ジョジョ名言一覧')
@section('header')
@component('components.header')
@slot('page_title')
ジョジョ名言一覧
@endslot
@endcomponent
@endsection

@section('content')
@include('components.title_linelist')
@endsection

@section('footer')
@include('components.footer')
@endsection