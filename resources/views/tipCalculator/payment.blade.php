@extends('layouts.master')


@section('title')
    Bill Splitter
@endsection


@push('head')
    <link href="/css/book/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
Show the final amount to pay
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
