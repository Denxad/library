<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('loggedin')->except('logout');
    }

    public function index() {
        return view('home.index');
    }

    public function paymentSalesChart() {
        $payments = Payment::where('payment_date', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL 3 MONTH)'))
            ->orderBy('payment_date', 'asc')
            ->get();

        $months = [];
        foreach($payments as $payment) {
            $date = explode("-", $payment->payment_date);
            if(!isset($months[$date[1]])) {
                $months[$date[1]] = $payment->amount;
                continue;
            }
            $months[$date[1]] += $payment->amount;
        }

        return json_encode($months);
    }
}
