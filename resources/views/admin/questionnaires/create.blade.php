<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Researcher - create questionnaire</title>
      <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
  <div class="container">
      <header class="row">
        <nav class="navbar navbar-inverse navbar-fixed-top">
             <div class="container-fluid">
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="/">Logout</a></li>
                 </ul>
             </div>
         </nav>
      </header>
      <article class="row">
          <h1>Create a new questionnaire</h1>

          

          {!! Form::open(['url' => 'home']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('desc', 'Description:') !!}
        {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Questionnaire', ['class' => 'btn btn-primary form-control']) !!}
    </div>


{!! Form::close() !!}


      </article>
      <footer class="row">
      </footer>
  </div><!-- close container -->

  </body>
  </html>
