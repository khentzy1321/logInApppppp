<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Kent Jai Abarquez',
                'email' => 'kenzy@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('khenzkie13')
            ],
            [
                'name' => 'Gojo Satoru',
                'email' => 'helloy@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('helloworld')
            ],
        ];
        foreach($users as $user){
            User::create($user);
            
        }
    }
}
