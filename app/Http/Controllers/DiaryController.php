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
        session()->flash('success', '日記を追加しました。');

        return redirect('/diaries');
    }

    public function edit($id) {
        $diary = Diary::find($id);
        
        return view('diaries.edit', [
            'diary' => $diary,
            'title' => '日記編集画面'
        ]);
    }

    public function update(DiaryRequest $request, $id) {
        $diary = Diary::find($id);
        $diary->update($request->only('title', 'log'));
        session()->flash('success', '日記を更新しました。');

        return redirect('/diaries');
    }

    public function destroy($id) {
        $diary = Diary::find($id);
        $diary->delete();
        session()->flash('success', '日記を削除しました。');

        return redirect('/diaries');
    }

}
