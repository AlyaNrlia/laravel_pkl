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
        $user = new User();
        $user->name = 'Alya Nurlia';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Memb 1';
        $user->email = 'memb01@gmail.com';
        $user->password = Hash::make('11111111');
        $user->save();

        $user = new User();
        $user->name = 'Memb 2';
        $user->email = 'memb02@gmail.com';
        $user->password = Hash::make('22222222');
        $user->save();

        $user = new User();
        $user->name = 'Memb 3';
        $user->email = 'memb03@gmail.com';
        $user->password = Hash::make('99999999');
        $user->save();

        $user = new User();
        $user->name = 'Memb 4';
        $user->email = 'memb04@gmail.com';
        $user->password = Hash::make('00000000');
        $user->save();

        $user = new User();
        $user->name = 'Memb 5';
        $user->email = 'memb05@gmail.com';
        $user->password = Hash::make('09876543');
        $user->save();

        $user = new User();
        $user->name = 'Alena Apriliyani';
        $user->email = 'alen@gmail.com';
        $user->password = Hash::make('30042019');
        $user->save();
    }
}
