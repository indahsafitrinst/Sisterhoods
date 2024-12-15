<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin.article.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'topic' => 'required',
            'article' => 'required'
        ]);
        $query = DB::table('articles')->insert([
            "name" => $request["name"],
            "topic" => $request["topic"],
            "article" => $request["article"]
        ]);
        return redirect('/admin/list-article')->with('success', 'Data submission successful!');
    }

    public function index()
    {
        $articles = DB::table('articles')->get();
        return view('admin.article.list', compact('articles'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function destroy($id) {
        $submission = DB::table('articles')->where('id', $id)->delete();
        return redirect('/admin/list-article')->with('success', 'Submission successfully deleted!');
    }
}
