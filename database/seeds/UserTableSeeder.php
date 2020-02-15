<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                [
                    'prenom '
                    => 'abdoulaye',
                    'nom '
                    => 'sarr',
                    'email'
                    => 'sarrabdoulaye7@email.com',
                    'email_verified_at' => now(),
                    'password'
                    => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    ' 	numero_de_telephone'
                    => '767844404', // numero_de_telephone
                    'roles'
                    => 'admin',
                    'adresse_exacte '
                    => 'medina',
                    'remember_token' => Str::random(10),
                ],
                [
                    
                    'prenom '
                    => 'abdoulaye',
                    'nom '
                    => 'sarr',
                    'email'
                    => 'sarrabdoulaye7@email.com',
                    'email_verified_at' => now(),
                    'password'
                    => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    ' 	numero_de_telephone'
                    => '767844404', // numero_de_telephone
                    'roles'
                    => 'admin',
                    'adresse_exacte '
                    => 'medina',
                    'remember_token' => Str::random(10),
                ]
            ]
        );

    }
}
