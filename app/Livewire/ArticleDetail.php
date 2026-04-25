<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDetail extends Component
{

    public Article $article;

    public function render()
    {   

        return view('livewire.article-detail');
    }
}
