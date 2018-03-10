<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    public function clients()
    {
        return $this->belongsToMany('App\Models\Client');
    }


}
