<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class LiveBookTable extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        //consumiendo vista
        $books = Book::where('title', 'like', '%'.$this->search.'%')->paginate(10);

        return view('livewire.live-book-table', [
            "books" => $books,
        ]);
    }

    public function showModal(Book $libro){
        $this->emit('showModal', $libro);
    }
}
