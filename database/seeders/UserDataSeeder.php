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
        $admins = Config::get('constants.admins');
        foreach ($users as $item) {
            Fuser::create([
                "fullname" => $item['fullname'],
                "contact" => $item['contact'],
                "email" => $item['email'],
                "password" =>  Hash::make($item['password']),
            ]);
        }
        foreach ($admins as $item) {
            User::create([
                "firstname" => $item['firstname'],
                "lastname" => $item['lastname'],
                "contact" => $item['contact'],
                "city" => $item['city'],
                "dob" => $item['dob'],
                "gender" => $item['gender'],
                "role" => $item['role'],
                "email" => $item['email'],
                "password" => $item['password'],
                "profile_img" => $item['profile_img']
            ]);
        }
    }
}
