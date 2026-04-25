<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $body;
    public $img;
    


    public function store(){
        
        $article = [
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
            ];

        if($this->img){
            $article['img'] = $this->img->store('media/img', 'public');
            
        }

        Article::create($article);

        $this->reset();

        session()->flash('message', 'Articolo inserito correttamente');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
