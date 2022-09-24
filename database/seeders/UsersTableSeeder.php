<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'id' => 1,
                    'name' => 'Admin Admin',
                    'email' => 'admin@lightbp.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('secret'),
                    'role' => 'ADMIN',
                    'user_role' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 2,
                    'name' => 'Brian Angoda',
                    'email' => 'brianangoda99@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 3,
                    'name' => 'Payas Mayanja',
                    'email' => 'mayanja@anka.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 4,
                    'name' => 'Alex Aturinda',
                    'email' => 'alexaturinda@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 5,
                    'name' => 'Michael Wokorach',
                    'email' => 'michael@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 6,
                    'name' => 'Melisa Bianca',
                    'email' => 'melisa@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 7,
                    'name' => 'Santos Wogongoba',
                    'email' => 'santos@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 8,
                    'name' => 'Mary Namuga',
                    'email' => 'mary@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 9,
                    'name' => 'Julius Ceaser',
                    'email' => 'hulius@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 10,
                    'name' => 'Joel Muhooli',
                    'email' => 'joel@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'id' => 11,
                    'name' => 'Bianca',
                    'email' => 'bianca@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('1234'),
                    'role' => 'USER',
                    'user_role' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
          ]);
    }
}
