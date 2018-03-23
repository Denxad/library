<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
 * @param int $id
 * @param string $name
 * @param string $telefone
 * @param string $telemovel
 */

class Member extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'members';
    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function getPaymentAttribute() {
        $totalPayment = 0;
        foreach($this->payments as $payment) {
            $totalPayment += $payment->amount;
        }

        return $totalPayment;
    }

    public function totalBookPrice() {
        if(!count($this->books)) {
            //Didn't buy any book
            return 0;
        }

        $totalBookPrice = 0;
        foreach($this->books as $book) {
            $totalBookPrice += $book->pivot->price;
        }

        return $totalBookPrice;
    }

    public function getDebtAttribute() {
        return round($this->totalBookPrice() - $this->payment, 2);
    }

    public function books() {
        return $this->belongsToMany('App\Models\Book')->withPivot('price', 'created_at');
    }

    public function payments() {
        return $this->hasMany('App\Models\Payment');
    }

}
