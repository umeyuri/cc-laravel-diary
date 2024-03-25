@extends('layouts.default')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    {{-- モデルのインスタンスになるためプロパティを出力している --}}
    <p>{{ $message->name }}: {{ $message->body }} {{ $message->created_at }}</p>
@endsection