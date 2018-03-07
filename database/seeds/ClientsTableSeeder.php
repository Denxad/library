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
            'name'     => 'Andre',
            'telefone'    => '920030010',
            'telemovel' => '910020300',
            'debt' => '312.00'
        ]);

        Client::create([
            'name'     => 'Joao',
            'telefone'    => '920030010',
            'telemovel' => '910020300',
            'debt' => '16.23'
        ]);

        Client::create([
            'name'     => 'Ricardo',
            'telefone'    => '920030010',
            'telemovel' => '910020300',
            'debt' => '24.21'
        ]);

        Client::create([
            'name'     => 'Margarida',
            'telefone'    => '920030010',
            'telemovel' => '910020300',
            'debt' => '12.43'
        ]);

        Client::create([
            'name'     => 'Catarina',
            'telefone'    => '920030010',
            'telemovel' => '910020300',
            'debt' => '2'
        ]);
    }

}
