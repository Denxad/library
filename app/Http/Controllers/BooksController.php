<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBook;
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

    public function add() {
        return view('books.create');
    }

    public function create(StoreBook $request) {
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

    public function edit(int $id) {
        $book = Book::find($id);

        if(!$book) {
            //Add Error Message
            return Redirect::to('books');
        }

        return view('books.update')->with('book', $book);
    }

    public function update(int $id, StoreBook $request) {
        $book = Book::find($id);

        if(!$book) {
            //Add Error Message
            return Redirect::to('books');
        }

        $book->title = $request->title;
        $book->price = $request->price;

        if (!$book->save()) {
            //error message
            return Redirect::to('books');
        }

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
