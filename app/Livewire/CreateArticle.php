<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required|min:3')]
    public $title;

    #[Validate('required|min:3')]
    public $subtitle;

    #[Validate('required|min:3')]
    public $body;


    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        return redirect()->route('articles.index')
            ->with('message', 'Articolo creato con successo.');
    }




    public function render()
    {
        return view('livewire.create-article');
    }
}
