<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Immeuble;
use App\User;
use App\Role;

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
        User::truncate();
        Immeuble::truncate();
        Role::truncate();
        
        $roles = ['Administrateur', 'Locataire', 'Bailleur'];
        for($i = 0; $i < count($roles); $i++) {
            DB::table('roles')->insert(['title' => $roles[$i]]);
        }
        factory(Immeuble::class, 20)->create();
        factory(User::class, 6)->create();   
    }
}
