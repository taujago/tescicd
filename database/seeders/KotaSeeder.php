<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 500; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('kotas')->insert([
                'id_kota' => $faker->nik,
                'nama_kota' => $faker->name,
                'id_pro' => $faker->id
            ]);
        }
        // $users = Kota::factory()->count(100)->create();
    }
}
