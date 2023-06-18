<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\IdeaRequest;

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

    public function store(IdeaRequest $request)
    {
        $validated = $request->validated();
        $idea = new Idea();
        $idea->user_id = 1; //ログイン機能実装まで仮に値を設定
        $idea->fill($request->all());
        $idea->save();

        return redirect('/ideas/' . $idea->id . '/edit');
    }
    public function edit(Idea $idea)
    {
        return view('ideas.edit', ['idea' => $idea]);
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        $validated = $request->validated();
        $idea->fill($request->all());
        $idea->save();

        return redirect('/ideas/' . $idea->id . '/edit')->with('message', '更新が完了しました');
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect('/ideas')->with('message', '削除が完了しました');
    }
}
