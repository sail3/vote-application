<?php

// use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 10; $i++) {
        DB::table('question')->insert([
          'title' => $faker->name,
          'description' => $faker->name,
        ]);
      }
    }
}
