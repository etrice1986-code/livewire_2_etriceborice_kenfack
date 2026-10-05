<?php

namespace App\Livewire;

use App\Models\Article;
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


    public Article $article;


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


        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        return redirect()->route('articles.index')
            ->with('message', 'Articolo aggiornato con successo.');
    }

    public function render()
    {
        return view('livewire.form-edit-article');
    }
}
