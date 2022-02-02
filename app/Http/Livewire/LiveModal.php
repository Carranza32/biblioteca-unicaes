<?php

namespace App\Http\Livewire;

use App\Models\Author;
use App\Models\Autor;
use App\Models\Book;
use App\Models\Categoria;
use App\Models\Category;
use App\Models\Editorial;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LiveModal extends Component
{
    public $showModal = 'hidden';

    public Book $book;

    public $updateMode = false;

    protected $listeners = [
        'showModal'
    ];

    public function render()
    {
        return view('livewire.live-modal', [
            "autores" => Author::all(),
            "categorias" => Category::all(),
            "editoriales" => Editorial::all(),
            "idiomas" => ['es', 'en'],
        ]);
    }

    public function showModal(Book $book = null)
    {
        $this->showModal = '';

        if ($book != null) {
            $this->updateMode = true;
            $this->book = $book;
        }else{
            $this->updateMode = false;
            $this->book = null;
        }
    }

    public function closeModal()
    {
        $this->showModal = 'hidden';
    }
}
