<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'USER 1',
                'pname' => 'IB',
                'email' => 'ibsoro95@gmail.com',
            ],
            [
                'name' => 'USER 2',
                'pname' => 'Aboya',
                'email' => 'aboya.achi@uvci.edu.ci',
            ],
        ];



        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}