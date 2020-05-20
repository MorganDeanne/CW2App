<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Questionnaires Avaliable</title>
      <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
  <div class="container">
      <header class="row">
        <nav class="navbar navbar-inverse navbar-fixed-top">
             <div class="container-fluid">
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="/">Home</a></li>
                 </ul>
             </div>
         </nav>
      </header>
      <section>

        <h1> Questionnaire List</h1>
        <p>Welcome user, choose from the list below a survey to fill out. </p>

        <a href="/home" class = 'btn btn-primary form-control'> Already got an account? Cick here? </a> <br>

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
                                <td><a href = ""> {{ $questionnaire->title }}</a></td>
                                <td>{{ $questionnaire->desc }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

        @else
            <p> no skills added yet </p>
        @endif
      </section>
      <footer class="row">
      </footer>
  </div>

  </body>
  </html>
