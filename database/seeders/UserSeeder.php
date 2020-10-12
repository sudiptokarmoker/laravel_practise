<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_data = User::where('email', 'sudiptocsi+1@gmail.com')->first();
        if(is_null($user_data)){
            $user = new User();
            $user->name = 'Sudipto Karmoker';
            $user->email = 'sudiptocsi+1@gmail.com';
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
