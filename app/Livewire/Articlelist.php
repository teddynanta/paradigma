<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Articlelist extends Component
{
    use WithPagination;

    public function render()
    {
        $articles = Article::with('category', 'author')->latest()->paginate(10);

        return view('livewire.articlelist', [
            'articles' => $articles,
        ]);
    }
}
