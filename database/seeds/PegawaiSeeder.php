<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 1; $x = 10; $x++) {
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address
            ]);
        }
    }
}
