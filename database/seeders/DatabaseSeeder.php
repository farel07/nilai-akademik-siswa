<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Kelas_User;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::create([
            'role' => 'administrator'
        ]);

        Kelas::create([
            'nama_kelas' => 'XI RPL 1'
        ]);

        User::create([
            'username' => 'asdasd',
            'password' => '123qwe',
            'nisn_npsn' => '0098122231',
            'name' => 'asdds asda',
            'tempat_lahir' => 'asdad',
            'tanggal_lahir' => now(),
            'role_id' => 1
        ]);

        Kelas_User::create([
            'user_id' => 1,
            'kelas_id' => 1
        ]);
    }
}
