<?php

use Illuminate\Database\Seeder;

class PartnerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Model\Partner::create([
           'company_name' => str_random(10),
           'email' => str_random(10).'@gmail.com',
           'address' => str_random(10).',TP.HCM',
           'description' => str_random(200).'@gmail.com',
           'phone_number' => str_random(12),
       ]);
    }
}
