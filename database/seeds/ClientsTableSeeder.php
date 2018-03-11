<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('clients')->delete();
        Client::create([
            'id' => 1,
            'name' => 'Andre',
            'telefone' => '920030010',
            'telemovel' => '910020300',
            'payment' => '0.00'
        ]);

        Client::create([
            'id' => 2,
            'name' => 'Joao',
            'telefone' => '920030010',
            'telemovel' => '910020300',
            'payment' => '0.00'
        ]);

        Client::create([
            'id' => 3,
            'name' => 'Ricardo',
            'telefone' => '920030010',
            'telemovel' => '910020300',
            'payment' => '0.00'
        ]);

        Client::create([
            'id' => 4,
            'name' => 'Margarida',
            'telefone' => '920030010',
            'telemovel' => '910020300',
            'payment' => '0.00'
        ]);

        Client::create([
            'id' => 5,
            'name' => 'Catarina',
            'telefone' => '920030010',
            'telemovel' => '910020300',
            'payment' => '0.00'
        ]);
    }

}
