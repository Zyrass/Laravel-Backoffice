@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('directors.index') }}">Réalisateur</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <hr />

    <h1 class="text-center">Liste des réalisateurs</h1>

    <table class="table table-striped table-bordered table-hover table-responsive">
      <caption class="text-center">Listing complet des mes réalisateurs inscrits en base de données BDD</caption>
      <thead>
        <tr>
          <th>Id</th>
          <th>image</th>
          <th>firstname</th>
          <th>lastname</th>
          <th>sexe</th>
          <th>Date de naissance</th>
          <th>Nationalité</th>
        </tr>
      </thead>
      <tbody>

        @foreach($directors as $key => $directors)
        <tr>

          <td><a href="#">{{ $directors->id }}</a></td>
          <td><img src="{{ $directors->image }}" class="img-responsive img-thumbnail" width="100px" height="50%"/></td>
          <td><h4><a>{{ $directors->firstname }}</a></h4></td>
          <td><h4><a>{{ $directors->lastname }}</a></h4></td>
          <td>
              @if ($directors->sex === "m")
                <img src="{{ asset('img/divers/symbole_homme.png') }}" class="img-responsive" width="75px" height="60%"/>
              @elseif ($directors->sex === "f")
                <img src="{{ asset('img/divers/symbole_femme.png') }}" class="img-responsive" width="75px" height="60%"/>
              @else
                ?
              @endif
          </td>
          <td><q>{{ $directors->dob }}</q></td>
          <td>
            @if ($directors->nationality === "France" | $directors->nationality === "france" | $directors->nationality === "Français" | $directors->nationality === "français" | $directors->nationality === "Française" | $directors->nationality === "française")
              <img src="{{ asset('img/flag/Flag_of_France.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Américain" | $directors->nationality === "américain" | $directors->nationality === "Américaine" | $directors->nationality === "américaine" | $directors->nationality === "Etats-Unis" | $directors->nationality === "etats-unis")
                <img src="{{ asset('img/flag/Flag_of_the_United_States.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Japonnais" | $directors->nationality === "japonnais" | $directors->nationality === "Japonnaise" | $directors->nationality === "japonnaise" | $directors->nationality === "Japon" | $directors->nationality === "japon")
                <img src="{{ asset('img/flag/Flag_of_Japan.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Algérien" | $directors->nationality === "algérien" | $directors->nationality === "Algérienne" | $directors->nationality === "algérienne" | $directors->nationality === "Algérie" | $directors->nationality === "algérie")
                <img src="{{ asset('img/flag/Flag_of_Algeria.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Argentin" | $directors->nationality === "argentin" | $directors->nationality === "Argentine" | $directors->nationality === "argentine")
                <img src="{{ asset('img/flag/Flag_of_Argentina.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Autrichien" | $directors->nationality === "autrichien" | $directors->nationality === "autrichienne" | $directors->nationality === "Autrichienne" | $directors->nationality === "Autriche" | $directors->nationality === "autriche")
                <img src="{{ asset('img/flag/Flag_of_Austria.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Belge" | $directors->nationality === "belge" | $directors->nationality === "Belgique" | $directors->nationality === "belgique")
                <img src="{{ asset('img/flag/Flag_of_Belgium.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Chinois" | $directors->nationality === "chinois" | $directors->nationality === "Chinoise" | $directors->nationality === "Choinoise")
                <img src="{{ asset('img/flag/Flag_of_China.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Anglais" | $directors->nationality === "anglais" | $directors->nationality === "Anglaise" | $directors->nationality === "anglaise")
                <img src="{{ asset('img/flag/Flag_of_England.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Allemand" | $directors->nationality === "allemand" | $directors->nationality === "Allemande" | $directors->nationality === "allemande")
                <img src="{{ asset('img/flag/Flag_of_Germany.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Qatar")
                <img src="{{ asset('img/flag/Flag_of_Qatar.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Russe" | $directors->nationality === "russe")
                <img src="{{ asset('img/flag/Flag_of_Russia.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Espagnol" | $directors->nationality === "espagnol" | $directors->nationality === "Espagne" | $directors->nationality === "espagne")
                <img src="{{ asset('img/flag/Flag_of_Spain.svg.png') }}" class="img-responsive" width="200px" height="50%"/>
              @elseif ($directors->nationality === "Turque" | $directors->nationality === "turque" | $directors->nationality === "Turquie" | $directors->nationality === "turquie")
                <img src="{{ asset('img/flag/Flag_of_Turquey.svg.png') }}" class="img-responsive" width="200px" height="50%"/>

              @else
                ?
            @endif
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
