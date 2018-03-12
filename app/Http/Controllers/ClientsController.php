<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookClient;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
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
        $clients = Client::all();

        return view('clients.index')->with('clients', $clients);
    }

    public function view(int $id) {
        $client = Client::find($id);

        if(!$client) {
            //Add Error Message
            return Redirect::to('clients');
        }

        $books = Book::pluck('title', 'id');

        return view('clients.view', ['client' => $client, 'books' => $books]);
    }

    public function create(Request $request) {
        if($request->method() == 'GET') {
            return view('clients.create');
        }

        $client = new Client();

        $client->name = $request->name;
        $client->telefone = $request->telefone;
        $client->telemovel = $request->telemovel;
        $client->payment = $request->payment;

        $client->save();
        //success message
        return Redirect::to('client/' . $client->id);
    }

    public function update(int $id, Request $request) {
        $client = Client::find($id);

        if(!$client) {
            //Add Error Message
            return Redirect::to('clients');
        }

        if($request->method() == 'GET') {
            return view('clients.update')->with('client', $client);
        }

        $client->name = $request->name;
        $client->telefone = $request->telefone;
        $client->telemovel = $request->telemovel;
        $client->payment = $request->payment;

        $client->save();
        //success message
        return Redirect::to('client/' . $client->id);
    }

    public function delete(int $id) {
        if (!Client::destroy($id)) {
            //Add Error Message
            return Redirect::to('/clients');
        }

        //success message
        return Redirect::to('/clients');
    }

    public function addBook(Request $request) {
        $client_id = $request->input('client_id');
        $book_id = $request->input('book_id');

        $client = Client::find($client_id);

        if(!$client) {
            //Add Error Message
        }

        $book = Book::find($book_id);

        $bookClient = new BookClient();
        $bookClient->client_id = $client->id;
        $bookClient->book_id = $book_id;
        $bookClient->price = $book->price;

        if(!$bookClient->save()) {
            //Add Error Message
        }
    }
}
