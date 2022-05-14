<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Employees')->insert([
            'first_name'=>'admin',
            'last_name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'password',
            'company_id'=> 1,
            'phone'=> '9876543210',

        ]);
    }
    
}
