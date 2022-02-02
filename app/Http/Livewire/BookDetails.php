<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookDetails extends Component
{
    public Book $book;

    public function render()
    {
        return view('livewire.book-details');
    }

    public function mount(Book $book)
    {
        $this->book = $book;
    }
}
