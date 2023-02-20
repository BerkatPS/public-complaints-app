<?php

namespace Database\Seeders;

use App\Models\AdminModels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminModels::create([
            'username' => 'admin',
            'password' => bcrypt(123456)
        ]);
    }
}
