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
      <caption class="text-center">Listing complet des mes réalisateurs inscrits en base de données BDD  - <small><a href="{{ route('directors.creer' )}}" class="pull-right btn btn-primary"><i class="fa fa-plus-circle"> Ajouter un réalisateur</i></a></small></caption>
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
          <td align="center">
            @if ($actors->nationality === "France")
              <img src="{{ asset('img/flag/Flag_of_France.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
            @elseif ($actors->nationality === "Etats-Unis")
                <img src="{{ asset('img/flag/Flag_of_the_United_States.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Japon")
                <img src="{{ asset('img/flag/Flag_of_Japan.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Algérie")
                <img src="{{ asset('img/flag/Flag_of_Algeria.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Argentine")
                <img src="{{ asset('img/flag/Flag_of_Argentina.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Autriche")
                <img src="{{ asset('img/flag/Flag_of_Austria.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Belgique")
                <img src="{{ asset('img/flag/Flag_of_Belgium.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Brazil")
                <img src="{{ asset('img/flag/Flag_of_Brazil.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Chine")
                <img src="{{ asset('img/flag/Flag_of_China.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Royaume-Uni")
                <img src="{{ asset('img/flag/Flag_of_the_United_Kingdom.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Allemand")
                <img src="{{ asset('img/flag/Flag_of_Germany.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Qatar")
                <img src="{{ asset('img/flag/Flag_of_Qatar.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Russe")
                <img src="{{ asset('img/flag/Flag_of_Russia.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Espagnol")
                <img src="{{ asset('img/flag/Flag_of_Spain.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Turquie")
                <img src="{{ asset('img/flag/Flag_of_Turquey.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Nouvelle-Zélande")
                <img src="{{ asset('img/flag/Flag_of_New_Zealand.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Hong-Kong")
                <img src="{{ asset('img/flag/Flag_of_Hong_Kong.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Austriche")
                <img src="{{ asset('img/flag/Flag_of_Austria.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Australie")
                <img src="{{ asset('img/flag/Flag_of_Australia.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
            @endif
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
