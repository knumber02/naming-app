<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.index', compact('ideas'));
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(Request $request)
    {
        $idea = new Idea();
        $idea->user_id = 1; //ログイン機能実装まで仮に値を設定
        $idea->main_category = $request->input('main_category');
        $idea->style = $request->input('style');
        $idea->keywords = $request->input('keywords');
        $idea->save();

        return redirect('/ideas');
    }
}
