<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('books')->delete();
        Book::create([
            'id' => 1,
            'title' => 'Nossa vida',
            'price' => '12.00',
        ]);

        Book::create([
            'id' => 2,
            'title' => 'Aquele lugar',
            'price' => '15.00',
        ]);

        Book::create([
            'id' => 3,
            'title' => 'Sempre depressa',
            'price' => '20.00',
        ]);

        Book::create([
            'id' => 4,
            'title' => 'Mesmo caro',
            'price' => '142.00',
        ]);

        Book::create([
            'id' => 5,
            'title' => 'Que passou',
            'price' => '43.25',
        ]);

        Book::create([
            'id' => 6,
            'title' => 'E ires a rua',
            'price' => '9.99',
        ]);

        Book::create([
            'id' => 7,
            'title' => 'Santinho',
            'price' => '42.00',
        ]);

        Book::create([
            'id' => 8,
            'title' => 'Risos',
            'price' => '32.99',
        ]);
    }

}
