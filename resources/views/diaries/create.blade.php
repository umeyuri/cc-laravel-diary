@extends('layouts.default')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ url('/diaries') }}">一覧に戻る</a>
    <form method="post" action="{{ url('/diaries') }}">
        @csrf
        <div>タイトル:<input type="text" name="title" placeholder="日記のタイトル入力"></div>
        <textarea name="log" rows="5" cols="30" placeholder="内容を入力"></textarea>
        <div><input type="submit" value="送信"></div>
    </form>
@endsection