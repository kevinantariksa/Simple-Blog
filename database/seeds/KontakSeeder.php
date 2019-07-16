<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i=0; $i < $limit ; $i++) {
            DB::table('model_kontaks')->insert([
              'nama' => $faker->name,
              'email' => $faker->unique()->email,
              'nohp' => $faker->phoneNumber,
              'alamat' => $faker->address,
          ]);
        }
    }
}
