@extends('layouts.default')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <form method="post" action="{{ url('/diaries/' . $diary->id) }}">
        @csrf
        @method('patch')
        <div>タイトル：<input type="text" name="title" value="{{ $diary->title }}"></div>
        <div><textarea cols="30" rows="10" name="log">{{ $diary->log }}</textarea></div>
        <input type="submit" value="保存">
    </form>
@endsection