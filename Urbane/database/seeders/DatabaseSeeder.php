<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Picture;
use App\Models\User;
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
        User::factory()->create([
            'username' => 'test',
            'email' => 'test@gmail.com',
            'password' => 'test',
            'phoneNumber' => '081212121212',
            'security' => 'bola',
        ]);

        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@urbane.com',
            'password' => 'admin',
            'role' => 'admin',
            'phoneNumber' => '081212121212',
            'security' => 'bola',
        ]);

        User::factory()->create([
            'username' => 'courier',
            'email' => 'courier@urbane.com',
            'password' => 'courier',
            'role' => 'courier',
            'phoneNumber' => '081313131313',
            'security' => 'tidur',
        ]);

        $this->call(CategorySeeder::class);
        Item::factory(5)->create();
        Picture::factory(10)->create();

    }
}
