<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';
    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function books()
    {
        return $this->belongsToMany('App\Models\Book')->withPivot('price', 'created_at');
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
        return $this->totalBookPrice() - $this->payment;
    }
}
