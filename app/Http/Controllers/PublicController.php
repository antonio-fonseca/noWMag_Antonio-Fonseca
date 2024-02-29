<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $latestAd = Article::getLatestAd();

        $articles = Article::orderBy('created_at', 'desc')
                            ->where('id', '!=', $latestAd->id)
                            ->take(8)
                            ->get();
        
        return view('home', compact('articles', 'latestAd'));
    }
    
}

