<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function index(){
        return view('article.index');
    }

    public function edit(Article $article){
        return view('article.edit', compact('article'));
    }
}
