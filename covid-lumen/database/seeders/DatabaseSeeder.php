<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
               

        // DB::table('users')->delete();

        $users = array(
            ['username' => 'admin', 'password' => Hash::make('password'),'api_token' => Str::random(50)],
            ['username' => 'lex', 'password' => Hash::make('secret'),'api_token' => Str::random(50)],
            ['username' => 'random', 'password' => Hash::make('secret'),'api_token' => Str::random(50)],
            ['username' => 'sample', 'password' => Hash::make('secret'),'api_token' => Str::random(50)],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }

    }
}
