<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator'
        ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'User Biasa'
        ]);

        $user = new User();
        $user->name = 'Alya Nurlia';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

//$pengunjung = new User();
//$pengunjung->name = 'Memb 1';
//$pengunjung->email = 'memb01@gmail.com';
//$pengunjung->password = Hash::make('11111111');
//$pengunjung->save();

//$pengunjung = new User();
//$pengunjung->name = 'Memb 2';
//$pengunjung->email = 'memb02@gmail.com';
//$pengunjung->password = Hash::make('22222222');
//$pengunjung->save();

//$pengunjung = new User();
//$pengunjung->name = 'Memb 3';
//$pengunjung->email = 'memb03@gmail.com';
//$pengunjung->password = Hash::make('99999999');
//$pengunjung->save();

//$pengunjung = new User();
//$pengunjung->name = 'Memb 4';
//$pengunjung->email = 'memb04@gmail.com';
//$pengunjung->password = Hash::make('00000000');
//$pengunjung->save();

//$pengunjung = new User();
//$pengunjung->name = 'Memb 5';
//$pengunjung->email = 'memb05@gmail.com';
//$pengunjung->password = Hash::make('09876543');
//$pengunjung->save();

        $pengunjung = new User();
        $pengunjung->name = 'Alena Apriliyani';
        $pengunjung->email = 'alen@gmail.com';
        $pengunjung->password = Hash::make('30042019');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
