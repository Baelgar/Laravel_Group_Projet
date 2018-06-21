<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = factory(App\User::class)->create(['email' => 'admin@local.fr','is_admin' => '1']);
            $user2 = factory(App\User::class)->create(['name' => 'user', 'email' => 'user@local.fr','is_admin' => '0']);
    }
}
