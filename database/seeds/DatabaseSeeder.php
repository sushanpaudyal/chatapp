<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
           'email' => 'sushan.paudyal@gmail.com',
           'name' => 'Sushan Paudyal'
        ]);

        factory(User::class)->create([
            'email' => 'jyotishrestha@gmail.com',
            'name' => 'Jyoti Shrestha'
        ]);

        factory(User::class)->create([
            'email' => 'jondoe@gmail.com',
            'name' => 'John Doe'
        ]);
    }
}
