<?php

namespace App\Livewire;

use App\Models\Article; // <-- Assicurati di includere il modello Article in cima
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormEditArticle extends Component
{
    #[Validate('required|min:3')]
    public $title;

    #[Validate('required|min:3')]
    public $subtitle;

    #[Validate('required|min:3')]
    public $body;

    // 1. CORRETTO: Cambiato da $articles a $article (singolare)
    public Article $article;

    // 2. CORRETTO: Adesso il mount accetta l'articolo che gli passi dalla vista
    public function mount(Article $article)
    {
        $this->article = $article;

        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
    }

    public function updateArticle()
    {
        $this->validate();

        // Ora $this->article funziona perfettamente perché esiste!
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('message', 'Articolo aggiornato con successo!');
    }

    public function render()
    {
        return view('livewire.form-edit-article');
    }
}
