<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Models\Diary;

class DiaryController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $diaries = \Auth::user()->diaries;
        return view('diary.index', [
            'title' => '日記一覧',
            'diaries' => $diaries,
        ]);
    }

    public function create() {
        return view('diary.create', [
            'title' => '日記追加画面',
        ]);
    }

    public function store(DiaryRequest $request) {
        Diary::create([
            'user_id' => \Auth::user()->id,
            'title' => $request->title,
            'log' => $request->log,
        ]);
        session()->flash('success', '日記を保存しました');
        
        return redirect('/diaries');
    }

    public function edit($id) {
        $diary = Diary::find($id);
        
        return view('diary.edit', [
            'diary' => $diary,
            'title' => '日記編集画面',
        ]);
    }

    public function update($id, DiaryRequest $request) {
        $diary = Diary::find($id);
        $diary->update($request->only('title', 'log'));

        session()->flash('success', '日記を更新しました');

        return redirect('/diaries');
    }

    public function destroy($id) {
        $diary = Diary::find($id);
        $diary->delete();

        return redirect('/diaries')->with('success', '削除しました');
    }
 }
