@extends('layouts.default')

@section('title', $title)
@section('content')
    <h1>{{ $title }}</h1>
    <form method="post" action="{{ url('/diaries/'.$diary->id) }}">
        @method('patch')
        @csrf
        タイトル:<input type="text" name="title" value="{{ $diary->title }}">
        <div><textarea name="log">{{ $diary->log }}</textarea></div>
        <input type="submit" value="保存">
    </form>
@endsection