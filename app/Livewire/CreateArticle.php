<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il titolo è obbligatorio')]
    #[Validate('min:5', message: 'Deve contenere almeno 5 caratteri')]
    public $title;

    #[Validate('required', message: 'La descrizione è obbligatoria')]
    #[Validate('min:20', message: 'Deve contenere almeno 20 caratteri')]
    public $description;

    #[Validate('required', message: 'Il corpo è obbligatorio')]
    #[Validate('min:50', message: 'Deve contenere almeno 50 caratteri')]
    public $body;

    public $img;



    public function store()
    {

        $this->validate();

        $article = [
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body,
        ];

        if ($this->img) {
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
