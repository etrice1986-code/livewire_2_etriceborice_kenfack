<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate; // <-- 1. Aggiunto questo import

class CreateArticle extends Component
{
    #[Validate('required|min:3')] // <-- 2. Lettera "V" maiuscola
    public $title;

    #[Validate('required|min:3')] // <-- 2. Lettera "V" maiuscola
    public $subtitle;

    #[Validate('required|min:3')] // <-- 2. Lettera "V" maiuscola
    public $body;


    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        $this->reset(['title', 'subtitle', 'body']);

        session()->flash('message', 'Articolo creato con successo.');
    }

    // Il metodo clearForm() non serve più perché hai usato correttamente $this->reset()!

    public function render()
    {
        return view('livewire.create-article');
    }
}
