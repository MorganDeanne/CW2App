<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css" />
    <title>@yield('title')</title>

    </head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <article class="row">

         @yield('content')

    </article>

</div><!-- close container -->
</body>
</html>
