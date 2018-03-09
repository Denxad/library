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
            'title'     => 'Nossa vida',
            'price'    => '12.00',
        ]);

        Book::create([
            'title'     => 'Aquele lugar',
            'price'    => '15.00',
        ]);

        Book::create([
            'title'     => 'Sempre depressa',
            'price'    => '20.00',
        ]);

        Book::create([
            'title'     => 'Mesmo caro',
            'price'    => '142.00',
        ]);

        Book::create([
            'title'     => 'Que passou',
            'price'    => '43.25',
        ]);

        Book::create([
            'title'     => 'E ires a rua',
            'price'    => '9.99',
        ]);

        Book::create([
            'title'     => 'Santinho',
            'price'    => '42.00',
        ]);

        Book::create([
            'title'     => 'Risos',
            'price'    => '32.99',
        ]);
    }

}
