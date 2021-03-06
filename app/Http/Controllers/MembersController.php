<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member\StoreMember;
use App\Models\Book;
use App\Models\BookMember;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MembersController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Members Controller
    |--------------------------------------------------------------------------

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('loggedin');
    }

    public function index() {
        $members = Member::all();

        $books = Book::pluck('title', 'id');

        return view('members.index', ['members' => $members, 'books' => $books]);
    }

    public function view(int $id) {
        $member = Member::find($id);

        if (!$member) {
            //Add Error Message
            return Redirect::to('members');
        }

        $books = Book::pluck('title', 'id');

        return view('members.view', ['member' => $member, 'books' => $books]);
    }

    public function add() {
        return view('members.create');
    }

    public function create(StoreMember $request) {
        $member = new Member();

        $member->name = $request->name;
        $member->telefone = $request->telefone;
        $member->telemovel = $request->telemovel;

        if (!$member->save()) {
            //error message
            return view('members.create');
        }

        return Redirect::to('member/' . $member->id);
    }

    public function edit(int $id) {
        $member = Member::find($id);

        if (!$member) {
            return Redirect::to('members', ['alert' => [
                'bold-message' => 'Erro!',
                'message' => 'O membro que tentou editar não existe'
            ]]);
        }

        return view('members.update')->with('member', $member);
    }

    public function update(int $id, StoreMember $request) {
        $member = Member::find($id);

        if (!$member) {
            //Add Error Message
            return Redirect::to('members');
        }

        $member->name = $request->name;
        $member->telefone = $request->telefone;
        $member->telemovel = $request->telemovel;

        if(!$member->save()) {
            //Add Error Message
            return Redirect::to('member/' . $member->id);
        }

        //success message
        return Redirect::to('member/' . $member->id);
    }

    public function delete(int $id) {
        if (!Member::destroy($id)) {
            //Add Error Message
            return Redirect::to('/members');
        }

        //success message
        return Redirect::to('/members');
    }

    public function addBook(Request $request) {
        $member_id = $request->input('member_id');
        $book_id = $request->input('book_id');

        $member = Member::find($member_id);

        if (!$member) {
            //Add Error Message
        }

        $book = Book::find($book_id);

        $bookMember = new BookMember();
        $bookMember->member_id = $member->id;
        $bookMember->book_id = $book_id;
        $bookMember->price = $book->price;

        if (!$bookMember->save()) {
            //Add Error Message
        }
    }

    public function addPayment(Request $request) {
        $member_id = $request->input('member_id');
        $amount = $request->input('amount');
        if($request->input('payment_date')) {
            $payment_date = strtotime($request->input('payment_date'));
            $payment_date = date('Y-m-d', $payment_date);
        } else {
            $payment_date = date('Y-m-d');
        }

        $member = Member::find($member_id);

        if (!$member) {
            //Add Error Message
        }

        $payment = new Payment();

        $payment->member_id = $member_id;
        $payment->amount = $amount;
        $payment->payment_date = $payment_date;

        if (!$payment->save()) {
            //Add Error Message
        }
    }
}
