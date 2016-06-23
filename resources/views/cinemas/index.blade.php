@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('cinemas.index') }}">Cinéma</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <hr />

    <h1 class="text-center">Liste de mes cinémas</h1>

    <table class="table table-striped table-bordered table-hover table-responsive text-center">
      <caption class="text-center">Listin complet des mes cinémas inscrits en base de données BDD  -
        <small>
          <a href="{{ route('cinemas.creer' )}}" class="pull-right btn btn-primary">
            <i class="fa fa-plus-circle"> Ajouter un cinéma</i>
          </a>
        </small>
      </caption>
      <thead>
        <tr>
          <th>Nom du cinéma</th>
          <th>Logo du cinéma</th>
          <th>Ville</th>
          <th>N°</th>
          <th>Adresse (Rue)</th>
          <th>Code Postal</th>
        </tr>
      </thead>
      <tbody>

        @foreach($cinemas as $key => $cinemas)
        <tr>

          <td><h4><a> {{ $cinemas->title }} </a></h4></td>
          <td><img src=" {{ $cinemas->logo }} " class="img-fluid img-responsive img-thumbnail" width="20%" height="50px"/></td>
          <td> {{ $cinemas->ville }} </td>
          <td><i> {{ $cinemas->numero }} </i></td>
          <td><i> {{ $cinemas->adress }} </i></td>
          <td> {{ $cinemas->cp }} </td>

        </tr>
        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
