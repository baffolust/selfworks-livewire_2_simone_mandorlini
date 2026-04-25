<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
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

    protected $imgDef = 'media/img/image_not_available.png';

    public Article $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->description = $this->article->description;
        $this->body = $this->article->body;
    }

    public function updateArticle()
    {

        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body
        ]);

        if ($this->img) {
            if ($this->article->img !== $this->imgDef) {
                Storage::disk('public')->delete($this->article->img);
            }
            $this->article->update([
                'img' => $this->img->store('media/img', 'public')
            ]);
        }


        redirect()->route('article.index')->with('message', 'Articolo aggiornato correttamente');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
