<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBooks extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        //consumiendo vista
        $books = Book::where('title', 'like', '%'.$this->search.'%')->paginate(12);

        return view('livewire.show-books', [
            "books" => $books,
        ]);
    }
}
