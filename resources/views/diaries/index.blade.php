@extends('layouts.default')

@section('title', $title)
@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ url('/diaries/create') }}">新規投稿</a>
    <ul>
    @forelse ($diaries as $diary)
        <li>{{ $diary->title }}:{{ $diary->created_at }}</li>
        <li>{{ $diary->log }}</li>
        <a href="">編集</a>
        <form>
            <input type="submit" value="削除">
        </form>
    @empty
        <p>日記はありません</p>
    @endforelse
</ul>
@endsection