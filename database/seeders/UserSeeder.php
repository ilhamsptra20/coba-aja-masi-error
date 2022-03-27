<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'nama' => 'admin',
            'no_telp' => '085893712441',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);
        $petugas = User::create([
            'nama' => 'petugas',
            'no_telp' => '085893712441',
            'email' => 'petugas@email.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false
        ]);
        $masyarakat = Masyarakat::create([
            'nik' => '1234567890',
            'nama' => 'masyarakat',
            'no_telp' => '085893712441',
            'username' => 'masyarakat',
            'email' => 'masyarakat@email.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
