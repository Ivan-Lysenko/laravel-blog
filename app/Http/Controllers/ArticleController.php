<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::paginate();
        $flash = session('status');
        return view('article.index', ['articles' => $articles, 'flash' => $flash]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);


        return view('article.show', ['article' => $article]);
    }

    public function create()
    {
        $article = new Article();

        return view('article.create', compact('article'));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        $request->session()->flash('status', 'Article was store successful!');
        $request->session()->flash('statused', 'Article was store successful Yet!');

        return redirect()->route('articles.index');
    }
}
