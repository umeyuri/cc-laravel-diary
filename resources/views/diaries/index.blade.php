@extends('layouts.default')

@section('title', $title)
@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ url('/diaries/create') }}">新規投稿</a>
    <ul class="diary-list">
        @forelse ($diaries as $diary)
        <div class="diary">
            <li>{{ $diary->user->name }}: {{ $diary->title }}:{{ $diary->created_at }}</li>
            <li>{{ $diary->log }}</li>
            <a href="{{ url('/diaries/' . $diary->id . '/edit') }}">編集</a>
            <form method="post" action="{{ url('/diaries/' . $diary->id) }}">
                @csrf
                @method('delete')
                <input type="submit" value="削除">
            </form>
        </div>
        @empty
            <p>日記はありません</p>
        
        @endforelse
    
    </ul>
@endsection