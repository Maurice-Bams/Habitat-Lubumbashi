<?php

use Illuminate\Database\Seeder;

use App\Immeuble;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Immeuble::class, 20)->create();
        factory(User::class, 6)->create();
    }
}
