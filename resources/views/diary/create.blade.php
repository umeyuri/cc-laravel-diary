@extends('layouts.default')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ url('/diaries') }}">一覧に戻る</a>
    <form method="post" action="{{ url('/diaries') }}">
        @csrf
        <div><label>タイトル：<input type="text" name="title"></label></div>
        <textarea name="log" cols="30" rows="10" placeholder="内容を入力"></textarea>
        <div><input type="submit" value="保存"></div>
    </form>
@endsection