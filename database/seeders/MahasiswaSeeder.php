<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 500; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('mahasiswas')->insert([
                'nim' => $faker->name,
                'nama' => $faker->name,
                'alamat' => $faker->address
             ]);
        }

    }
}
