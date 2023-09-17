<?php

namespace App\Http\Controllers\abclub;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'content' => ['required'],
            'parent_id' => ['nullable', 'exists:comments,id'],
            'report_id' => ['required', 'exists:reports,id']
        ]);

        // if (Auth::user()) {
        //     $request->name = Auth::user()->name;
        //     $request->email = Auth::user()->email;
        // }

        Comment::create([
            'content' => $request->content,
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'email' => $request->email,
            'report_id' => $request->report_id
        ]);
        return back()->with('comment-success', 'Commentaire ajouté');
    }
}
