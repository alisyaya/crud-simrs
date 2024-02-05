<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Dokter',
                'email'=>'dokter@gmail.com',
                'role'=>'dokter',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Perawat',
                'email'=>'perawat@gmail.com',
                'role'=>'perawat',
                'password'=>bcrypt(123456)
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
