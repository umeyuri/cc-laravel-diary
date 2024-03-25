<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class SampleController extends Controller
{
    public function modelSample() {
        $message = Message::find(2);
        return view('samples.model_sample', [
            'title' => 'モデルの使い方',
            'message' => $message,
        ]);
    }
}
