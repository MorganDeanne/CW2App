@extends('layouts.master')

@section('content')
<section>

  <h1> Questionnaire List</h1>
  <p>Welcome user, choose from the list below a survey to fill out. </p>

  <a href="/questionnaires/create" class = 'btn btn-primary form-control'> Add New Question </a> <br>

  @if (isset ($questionnaires))

  <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <td>Title</td>
                      <td>Description</td>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($questionnaires as $questionnaire)
                      <tr>
                          <td><a href = "questionnaires/{id}"> {{ $questionnaire->title }}</a></td>
                          <td>{{ $questionnaire->desc }}</td>
                      </tr>

                  @endforeach
              </tbody>
          </table>

  @else
      <p> no skills added yet </p>
  @endif
</section>
@endsection
