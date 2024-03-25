<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index() {

        return view('diaries.index', [
            'title' => '日記一覧',
            'diaries' => Diary::all(),
        ]);
    }

    public function create() {
        return view('diaries.create', [
            'title' => '日記追加画面',
        ]);
    }

    public function store(DiaryRequest $request) {
        Diary::create($request->only('title', 'log'));

        return redirect('/diaries');
    }
}
