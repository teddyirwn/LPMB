<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();
        $admin->userName = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('12345678');
        $admin->fullName = "admin kece abis";
        $admin->alamat = "deskap men";
        $admin->noHp = "083256185673";
        $admin->role = "admin";
        $admin->save();

        $user = new User();
        $user->userName = "user";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('12345678');
        $user->fullName = "user kece abis";
        $user->alamat = "deskap men";
        $user->noHp = "083256185673";
        $user->role = "user";
        $user->save();
    }
}
