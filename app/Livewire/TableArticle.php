<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class TableArticle extends Component
{
    public function deleteArticle(Article $article)
    {
        $article->delete();
        session()->flash('message', 'Articolo eliminato con successo!');
    }

    public function render()
    {
        $articles = Article::all();
        return view('livewire.table-article', compact('articles'));
    }
}
