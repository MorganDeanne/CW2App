<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\questionnaire;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $questionnaires = questionnaire::all();

      return view('home', ['questionnaires' => $questionnaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();

      questionnaire::create($input);

      return redirect('home');
    }

    public function individual()
    {
      $questionnaires = questionnaire::all();

      return view('admin.questionnaires.individual', ['questionnaires' => $questionnaires]);
    }

    public function show()
    {
      $questionnaires = questionnaire::all();

      return view('admin.questionnaires.individual', ['questionnaires' => $questionnaires]);
    }


}
