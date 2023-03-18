<?php

namespace Database\Seeders;

use App\Models\Fuser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Config::get('constants.users');
        foreach ($users as $item) {
            Fuser::create([
                "fullname" => $item['fullname'],
                "contact" => $item['contact'],
                "email" => $item['email'],
                "password" =>  Hash::make($item['password']),
            ]);
        }
    }
}
