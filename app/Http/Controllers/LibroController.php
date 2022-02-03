<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Libro;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('admin.books');
   }

    public function dashboard()
    {
        $params = [
            "now" => Carbon::now()->format('Y-m-d'),
            "loans" => Loan::all(),
        ];

        return view('dashboard', $params);
    }

    public function entregarLibro($id)
    {
        $loan = Loan::find($id);
        $loan->is_active = 0;
        $loan->save();

        return redirect()->back()->with('status', 'Libro entregado.');
    }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
   }

    /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect()->back()->with('status', 'Libro creado.');
    }

   /**
    * Display the specified resource.
    *
    * @param  int  $libro
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('bookDetails', ["book" => $book]);
    }

    public function prestamo($id)
    {
        $libro = Book::where('id', $id)->where('is_active', 1)->first();

        $prestamoActivo = Loan::where('book_id', $libro->id)->where('is_active', 1)->first();

        //libro disponible para prestamo
        if ($prestamoActivo == NULL || $libro->stock > 0) {

            Loan::create([
                'user_id' => Auth::user()->id,
                'book_id' => $libro->id,
                'deliver_date' => Carbon::now()->addDay(3),
            ]);

            return redirect()->route('dashboard')->with('status', 'Libro prestado.');
        }

        return redirect()->back()->with('status', 'Libro no disponible.');
    }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Libro  $libro
    * @return \Illuminate\Http\Response
    */
   public function edit(Libro $libro)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  Book  $libro
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return redirect()->back()->with('status', 'Libro actualizado.');
    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Book $book)
    {
        // $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->back()->with('status', 'Libro eliminado.');
    }
}
