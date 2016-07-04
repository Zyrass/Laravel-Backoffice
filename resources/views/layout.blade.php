<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@section('metaDesc') Description du backoffice @show "/>
    <title>@section('title') Backoffice @show</title>

    <!-- Bootstrap -->

    @section('css')
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen" title="no title" charset="utf-8">
    @show


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li>
            <a class="navbar-brand" href="{{ ('/') }}">
              <img src="{{ asset('img/icon/laravel.png' )}}" alt="icone laravel" width="30px" height="30px"/>
            </a>
          </li>
          <li class="active">
            <a href="{{ route('welcome') }}">
              <i class="fa fa-home fa-2x"> Home</i>
            </a>
          </li>
          <li>
            <a href="{{ route('faq') }}">
              <i class="fa fa-question-circle fa-2x"> FAQ</i>
            </a>
          </li>
          <li>
            <a href="{{ route('about') }}">
              <i class="fa fa-info-circle fa-2x"> A propos</i>
            </a>
          </li>
          <li>
            <a href="{{ route('contact') }}">
              <i class="fa fa-envelope fa-2x"> Contact</i>
            </a>
          </li>
          <li>
            <a href="{{ route('concept') }}">
              <i class="fa fa-info fa-2x"> Concept</i>
            </a>
          </li>
          <li>
            <a href="{{ route('presse') }}">
              <i class="fa fa-newspaper-o fa-2x"> Presse</i>
            </a>
          </li>
        </ul>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" id="margeBasse">

          @include('partial/_sidebar')

          @include('partial/_topmenu')

          @section('content')

          @show

        </div>
      </div> <!-- Fin row -->
    </div> <!-- Fin container-fluid -->

    <footer>
      <p class="text-center">- Copyright 2016-2017 -</p>
    </footer>

    @section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @show

  </body>
</html>
