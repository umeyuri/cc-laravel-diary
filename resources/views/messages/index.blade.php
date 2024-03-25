@extends('layouts.default')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <form method="post" action="{{ url('/messages') }}">
        @csrf
        <div><label>名前:<input type="text" name="name" placeholder="名前を入力"></label></div>
        <div><label>コメント:<input type="text" name="body" placeholder="コメントを入力"></label></div>
        <input type="submit" value="送信">
    </form>
    <ul>
        @forelse ($messages as $message)
            <li>{{ $message->name }}: {{ $message->body }} {{ $message->created_at }}</li>
        @empty
            <p>メッセージはありません</p>
        @endforelse
    </ul>
@endsection