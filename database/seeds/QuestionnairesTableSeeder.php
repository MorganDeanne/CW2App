<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questionnaires')->insert([
            ['id' => 1, 'title' => "Questionnaire One", 'desc' => "This is a Questionnaire about laravel"],
            ['id' => 2, 'title' => "Questionnaire Two", 'desc' => "This is a Questionnaire about frameworks"],
            ['id' => 3, 'title' => "Questionnaire Three", 'desc' => "This is a Questionnaire about php"],
        ]);
    }
}
