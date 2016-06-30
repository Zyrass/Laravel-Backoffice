@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('series.index') }}">Séries</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Liste de mes séries</h1>

    <table class="table table-striped table-bordered table-hover table-responsive">
      <caption>Listing complet de mes séries enregistré en base de donnée (BDD)  - <small><a href="{{ route('series.creer' )}}" class="pull-right btn btn-primary"><i class="fa fa-plus-circle"> Ajouter une série</i></a></small></caption>
      <thead>
        <tr class="headings">
          <th class="column-title">Affiche</th>
          <th class="column-title">Titre</th>
          <th class="column-title">Nb - Saison</th>
          <th class="column-title">Synopsis</th>
          <th class="column-title">Nb - d'épisodes</th>
          <th class="column-title">Durée total</th>
          <th class="column-title">Année</th>
          <th class="column-title">Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($series as $key => $series)
        <tr>
          <td><img src="{{ $series->image }}" class="img-responsive img-thumbnail" width="100px" height="50%" /></td>
          <td><h4><a>{{ $series->title }}</a></h4></td>
          <td><p>{{ $series->nbseasons }}</p></td>
          <td style="word-break: break-all"><i>{{ strip_tags($series->synopsis) }}</i></td>
          <td><p>{{ $series->nbepisodes }}</p></td>
          <td><p>{{ $series->duree }}</p></td>
          <td><p>{{ $series->anneerelease }}</p></td>
          <td>
            @if ($series->status == "prod")
              <p class="label label-success">{{ $series->status }}</p>
            @else
              <p class="label label-danger">{{ $series->status }}</p>
            @endif
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
