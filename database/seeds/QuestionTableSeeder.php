<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
            ['id' => 1, 'questionnaire_id' => 1, 'desc' => "Do you enjoy laravel?"],
            ['id' => 1, 'questionnaire_id' => 1, 'desc' => "Will you continue to choose laravel as a framework?"],
        ]);
    }
}
