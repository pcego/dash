<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,1)
            ->create([
                'name' => 'Luis Felipe Veloso',
                'email' => 'admin@user.com'
            ]);

        factory(\App\User::class,1)
            ->create([
                'name' => 'Cliente da Silva',
                'email' => 'client@user.com'
            ]);

        factory(\App\User::class,20)->create();
    }
}
