<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use App\Articles;

class ArticlesController extends Controller
{

    public function showMainPage()
    {
        return view('main', ['data'=>Articles::orderBy('created_at','desc')->take(6)->get(),
        'isBig' => true
    ]);
    }
    public function submit(ArticlesRequest $request)
    {
        $article = new Articles();
        $article->subject = $request->input('subject');
        $article->text = $request->input('text');
        $article->save();

        return redirect()->route('articles')->with('success', 'Статья была добавлена');
    }

    public function showAllArticles()
    {

        return view('articles', ['data' => Articles::orderBy('created_at', 'desc')->take(10)->paginate(10)]);
    }

    public function showOneArticle($id)
    {
        return view('oneArticle', ['data'=> Articles::all()->find($id)]);
    }

    public function updateArticle($id) 
    {
        return view('changeArticle', ['data'=>Articles::all()->find($id)]);
    }

    public function updateArticleSubmit($id, ArticlesRequest $request)
    {
        $article = Articles::find($id);
        $article->subject = $request->input('subject');
        $article->text = $request->input('text');
        $article->save();

        return redirect()->route('articles')->with('success', 'Статья была изменена');
    }

    public function deleteArticle($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect()->route('articles')->with('success', 'Статья была удалена');

    }
}
