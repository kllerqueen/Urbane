<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // run seeder
        \App\Models\User::factory()->create([
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => 'test@gmail.com',
            'phoneNumber' => '081212121212',
            'security' => 'bola',
        ]);

        $this->call(CategorySeeder::class);
        \App\Models\Item::factory(5)->create();
        \App\Models\Picture::factory(10)->create();
            
    }
}
