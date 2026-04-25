<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ArticlesList extends Component
{
    protected $imgDef = 'media/img/image_not_available.png';

    public function destroy(Article $article){

        if ($article->img !== $this->imgDef) {
                Storage::disk('public')->delete($article->img);
            }

        $article->delete();
        
    }

    public function render()
    {
        $articles = Article::all();
        return view('livewire.articles-list', compact('articles'));
    }
}
