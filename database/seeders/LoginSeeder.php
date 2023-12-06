<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'nama_meninggal'=>'admin',
                'email'=>'adminkesra@gamil.com',
                'nik_meninggal' => '12345',
                'role'=>'1',
                'password'=>Hash::make('123456')
            ],
        ];

        foreach($userData as $key => $val){
           User::create($val);
        }
    }
}
