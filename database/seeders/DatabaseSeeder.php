<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory([
            'name'     => 'Christian Kaal',
            'email'    => 'christiankaal@gmail.com',
            'password' => 'secret',
        ])->create();

        $user->tenants()->save(Tenant::factory()->create([
            'name' => 'Blackbox',
        ]));
    }
}
