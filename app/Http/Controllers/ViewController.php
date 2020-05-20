<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\questionnaire;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $questionnaires = questionnaire::all();

      return view('view', ['questionnaires' => $questionnaires]);

    }

    public function getDisplay($id){

        $id = questionnaire::find($id);

        return view('questionnaire/{id}')->withProject($id);

    }
}
