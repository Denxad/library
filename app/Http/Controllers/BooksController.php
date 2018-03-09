<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BooksController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('loggedin');
    }

    public function index() {
        $books = Book::all();

        return view('books.index')->with('books', $books);
    }

    public function view(int $id) {
        $book = Book::find($id);

        if(!$book) {
            //Add Error Message
            return Redirect::to('books');
        }
        //success message
        return view('books.view')->with('book', $book);
    }

    public function create(Request $request) {
        if($request->method() == 'GET') {
            return view('books.create');
        }

        $book = new Book();

        $book->title = $request->title;
        $book->price = $request->price;

        if (!$book->save()) {
            //error message
            return Redirect::to('books');
        }
        //success message
        return Redirect::to('book/' . $book->id);
    }

    public function update(int $id, Request $request) {
        $book = Book::find($id);

        if(!$book) {
            //Add Error Message
            return Redirect::to('books');
        }

        if($request->method() == 'GET') {
            return view('books.update')->with('book', $book);
        }

        $book->name = $request->name;
        $book->telefone = $request->telefone;
        $book->telemovel = $request->telemovel;
        $book->debt = $request->debt;

        $book->save();
        //success message
        return Redirect::to('book/' . $book->id);
    }

    public function delete(int $id) {
        if (!Book::destroy($id)) {
            //Add Error Message
            return Redirect::to('/books');
        }

        //success message
        return Redirect::to('/books');
    }
}
