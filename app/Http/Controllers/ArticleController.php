<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // dd($request->all());
        $article = Article::create(
            [
                'title'=>$request->input('title'),
                'subtitle'=>$request->input('subtitle'),
                'body'=>$request->input('body'),
                'img'=>$request->file('img')->store('public'),
                'category_id'=>$request->input('category_id'),
                'user_id'=> Auth::user()->id,
            ]
            );
            // dd($article);
        return redirect()->route('articles.index')->with('message', 'Well done! Your article was successfully inserted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        
        $articles = Article::orderBy('created_at', 'desc')
        
        ->take(4)
        ->get();
        
        return view('articles.show', compact('article','articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('message', 'Articolo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('message', 'Articolo eliminato con successo!');
    }
}
