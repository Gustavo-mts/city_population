<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name" => "Cristinos Ronaldoooo",
            "email" => "chrstaiswssnoJr@gmail.com",
            "password" => Hash::make("senha12aw34siiu")
        ]);

        DB::table('addresses')->insert([
            "address" => "rua do raimundão, no 0"
        ]);

        DB::table('invoices')->insert([
            'description' => 'convite 1',
            'value' => '4',
            'address_id' => '1',
            'user_id' => '1'
        ]);
    }
}
