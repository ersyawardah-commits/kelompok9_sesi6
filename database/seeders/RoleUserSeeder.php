<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $accounts = [
            [
                'name' => 'Kasir Mie Djotek',
                'username' => 'kasir',
                'email' => 'kasir@miedjotek.test',
                'password' => 'Kasir12345',
                'role' => 'kasir',
            ],
            [
                'name' => 'Petugas Dapur',
                'username' => 'dapur',
                'email' => 'dapur@miedjotek.test',
                'password' => 'Dapur12345',
                'role' => 'dapur',
            ],
        ];

        foreach ($accounts as $account) {
            $user = User::where('username', $account['username'])
                ->first();

            if (!$user) {
                $user = new User();
            }

            $user->name = $account['name'];
            $user->username = $account['username'];
            $user->email = $account['email'];
            $user->password = Hash::make($account['password']);
            $user->role = $account['role'];
            $user->save();
        }
    }
}
