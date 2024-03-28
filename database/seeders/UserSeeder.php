<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            
            'role_id' => '2',
            'unique_id'=>Str::uuid(),
            'first_name'=>'Shadow',
            'last_name' =>'User',
            'name' =>'user',
            'slug' =>'user',
            'user_status'=>1,
            'mobile'=>101234567,
            'email' => 'user@gmail.com',
            'email_verified_at'=>now(),
            'password' => Hash::make('temp123'),
            'created_at'=>now(),
            'updated_at'=>now(),

        ],[
         
            'role_id' => '1',
            'unique_id'=>Str::uuid(),
            'first_name'=>'admin',
            'last_name' =>'admin',
            'name' =>'admin',
            'slug' =>'admin',
            'user_status'=>1,
            'mobile'=>101234567,
            'email' => 'admin@gmail.com',
            'email_verified_at'=>now(),
            'password' => Hash::make('temp123'),
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
    }
}
