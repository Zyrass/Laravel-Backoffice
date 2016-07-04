@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('movies.index') }}">Movies</a></li>
      <li><a href="{{ route('movies.search') }}">Rechercher</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Résultat de recherche</h1>

    <table class="table table-striped table-bordered table-hover table-responsive">
      <caption>Listing complet de mes films enregistré en base de donnée (BDD)  - <small><a href="{{ route('movies.creer' )}}" class="pull-right btn btn-primary"><i class="fa fa-plus-circle"> Ajouter un film</i></a></small></caption>
      <thead>
        <tr class="headings">
          <th class="column-title">Like</th>
          <th class="column-title">Affiche</th>
          <th class="column-title">Titre</th>
          <th class="column-title">Langue</th>
          <th class="column-title">Synopsis</th>
          <th class="column-title">Visible</th>
          <th class="column-title">Cover</th>
          <th class="column-title">Budget</th>
          <th class="column-title">Durée</th>
          <th class="column-title">Sortie</th>
          <th class="column-title">Presse</th>
          <th class="column-title">Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach($movies as $key => $movies)
        <tr>
          <td>
            @if(!in_array($movies->id, session('likes', [])))
            <a href="{{ route('movies.aimer', [
                'id' => $movies->id,
                'action' => 'like'
              ]) }}">
              <span><i class="fa fa-heart-o"></i> </span>
            </a>
            @else
              <a href="{{ route('movies.aimer', [
                  'id' => $movies->id,
                  'action' => 'dislike'
                ]) }}">
                <span><i class="fa fa-heart"></i> </span>
              </a>
            @endif
          </td>
          <td><img src="{{ $movies->image }}" class="img-responsive img-thumbnail" width="100px" height="50%" /></td>
          <td><h4><a>{{ $movies->title }}</a></h4></td>
          <td>
            @if ($movies->languages === "Fr" | $movies->languages === "fr")
              <img src="{{ asset('img/flag/Flag_of_France.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "US" | $movies->languages === "us" | $movies->languages === "En" | $movies->languages === "en")
                <img src="{{ asset('img/flag/Flag_of_the_United_States.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Jap" | $movies->languages === "jap")
                <img src="{{ asset('img/flag/Flag_of_Japan.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Alg" | $movies->languages === "alg")
                <img src="{{ asset('img/flag/Flag_of_Algeria.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Arg" | $movies->languages === "arg")
                <img src="{{ asset('img/flag/Flag_of_Argentina.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Aut" | $movies->languages === "aut")
                <img src="{{ asset('img/flag/Flag_of_Austria.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Be" | $movies->languages === "be")
                <img src="{{ asset('img/flag/Flag_of_Belgium.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Ch" | $movies->languages === "ch")
                <img src="{{ asset('img/flag/Flag_of_China.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Eng" | $movies->languages === "eng")
                <img src="{{ asset('img/flag/Flag_of_England.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "De" | $movies->languages === "de")
                <img src="{{ asset('img/flag/Flag_of_Germany.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Qat" | $movies->languages === "qat")
                <img src="{{ asset('img/flag/Flag_of_Qatar.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Ru" | $movies->languages === "ru")
                <img src="{{ asset('img/flag/Flag_of_Russia.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($movies->languages === "Esp" | $movies->languages === "esp")
                <img src="{{ asset('img/flag/Flag_of_Spain.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @else
                ?
            @endif
          </td>
          <td style="word-break: break-all"><i>{{ strip_tags(str_limit($movies->synopsis, 100)) }}</i></td>
          <td>
            @if ($movies->visible == 1)
            <a href="{{ route('movies.visible', ['id' => $movies->id, 'visible' => 0]) }}">
              <i class="fa fa-eye text-success" aria-hidden="true"></i>
            @else
              <a href="{{ route('movies.visible', ['id' => $movies->id, 'visible' => 1]) }}">
              <i class="fa fa-eye-slash text-danger" aria-hidden="true"></i>
            @endif
            </a>
          </td>
          <td>
            <b>
              @if($movies->cover == 1)
                <a href="{{ route('movies.cover', ['id' => $movies->id, 'cover' => 0]) }}">
                <span class="fa fa-star text-success"></span>
              @else
                <a href="{{ route('movies.cover', ['id' => $movies->id, 'cover' => 1]) }}">
                <span class="fa fa-star-o text-danger"></span>
              @endif
                </a>
            </b>
          </td>
          <td>
            @if ($movies->languages == 'FR' | $movies->languages == 'fr')
              <b>{{ number_format($movies->budget, 2, ',', " ") }} €</b>
            @elseif ($movies->languages == 'US' | $movies->languages == 'us')
              <b>{{ number_format($movies->budget, 2, ',', " ") }} $</b>
            @elseif ($movies->languages == 'EN' | $movies->languages == 'en')
              <b>{{ number_format($movies->budget, 2, ',', " ") }} £</b>
            @endif
          </td>
          <td><b class="fa fa-clock-o"> {{ date('H:i', strtotime($movies->duree)) }} h.</td>
          <td><h5 class="label label-info"><i>{{ date('d/m/Y', strtotime($movies->date_release)) }}</i></h5></td>
          <td><h5><i>{!! str_repeat("<span class='fa fa-star text-warning'></span>", $movies->note_presse) !!}</i></h5></td>
          <td>
            <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search">Voir</span></a>
            <a href="{{ route('movies.editer', ['id' => $movies->id]) }}" class="btn btn-xs btn-warning"><span class="fa fa-edit">Editer</span></a>

            <a href="{{ route('movies.delete', ['id' => $movies->id]) }}" onclick="return confirm('Etes-vous sûre de vouloir supprimer ce film ?')" class="btn btn-xs btn-danger"><span class="fa fa-close">Supprimer</span></a>
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
