<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuestionController extends Controller
{
    public function show()
    {
      $questionns = question::all();

      return view('admin.questionnaires.individual', ['question' => $questions]);
    }
    public function create( \App\questionnaire $questionnaire)
    {

    }

    public function show()
    {

    }


}
