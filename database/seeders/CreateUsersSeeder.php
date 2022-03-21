<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin123'),
               'kelas'=> '11 MIPA 1',
            ],
            [
               'name'=>'Siswa',
               'email'=>'siswa@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('siswa123'),
               'kelas'=> 'admin',
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
