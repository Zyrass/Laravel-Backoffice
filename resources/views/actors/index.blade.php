@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('actors.index') }}">Acteurs</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Liste de mes acteurs</h1>

    <table class="table table-striped table-bordered table-hover table-responsive text-center">
      <caption class="text-center">Listing complet des mes acteurs inscrits en base de données BDD</caption>
      <thead>
        <tr>
          <th>Id</th>
          <th>image</th>
          <th>firstname</th>
          <th>lastname</th>
          <th>sexe</th>
          <th>Date de naissance</th>
          <th>Nationalité</th>
          <th>Récompenses</th>
        </tr>
      </thead>
      <tbody>

        @foreach($actors as $key => $actors)
        <tr valign="center">

          <td><a href="#">{{ $actors->id }}</a></td>
          <td><img src="{{ $actors->image }}" class="img-responsive img-thumbnail" width="100px" height="50%"/></td>
          <td><h4><a>{{ $actors->firstname }}</a></h4></td>
          <td><h4><a>{{ $actors->lastname }}</a></h4></td>
          <td>
              @if ($actors->sex === "m")
                <img src="{{ asset('img/divers/symbole_homme.png') }}" class="img-responsive" width="50px" height="50%"/>
              @elseif ($actors->sex === "f")
                <img src="{{ asset('img/divers/symbole_femme.png') }}" class="img-responsive" width="50px" height="50%"/>
              @else
                ?
              @endif
          </td>
          <td><q>{{ $actors->dob }}</q></td>
          <td align="center">
            @if ($actors->nationality === "France" | $actors->nationality === "france" | $actors->nationality === "Français" | $actors->nationality === "français" | $actors->nationality === "Française" | $actors->nationality === "française")
              <img src="{{ asset('img/flag/Flag_of_France.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Américain" | $actors->nationality === "américain" | $actors->nationality === "Américaine" | $actors->nationality === "américaine" | $actors->nationality === "Etats-Unis" | $actors->nationality === "etats-unis")
                <img src="{{ asset('img/flag/Flag_of_the_United_States.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Japonnais" | $actors->nationality === "japonnais" | $actors->nationality === "Japonnaise" | $actors->nationality === "japonnaise" | $actors->nationality === "Japon" | $actors->nationality === "japon")
                <img src="{{ asset('img/flag/Flag_of_Japan.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Algérien" | $actors->nationality === "algérien" | $actors->nationality === "Algérienne" | $actors->nationality === "algérienne" | $actors->nationality === "Algérie" | $actors->nationality === "algérie")
                <img src="{{ asset('img/flag/Flag_of_Algeria.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Argentin" | $actors->nationality === "argentin" | $actors->nationality === "Argentine" | $actors->nationality === "argentine")
                <img src="{{ asset('img/flag/Flag_of_Argentina.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Autrichien" | $actors->nationality === "autrichien" | $actors->nationality === "autrichienne" | $actors->nationality === "Autrichienne" | $actors->nationality === "Autriche" | $actors->nationality === "autriche")
                <img src="{{ asset('img/flag/Flag_of_Austria.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Belge" | $actors->nationality === "belge" | $actors->nationality === "Belgique" | $actors->nationality === "belgique")
                <img src="{{ asset('img/flag/Flag_of_Belgium.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Chinois" | $actors->nationality === "chinois" | $actors->nationality === "Chinoise" | $actors->nationality === "Choinoise")
                <img src="{{ asset('img/flag/Flag_of_China.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Anglais" | $actors->nationality === "anglais" | $actors->nationality === "Anglaise" | $actors->nationality === "anglaise")
                <img src="{{ asset('img/flag/Flag_of_England.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Allemand" | $actors->nationality === "allemand" | $actors->nationality === "Allemande" | $actors->nationality === "allemande")
                <img src="{{ asset('img/flag/Flag_of_Germany.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Qatar")
                <img src="{{ asset('img/flag/Flag_of_Qatar.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Russe" | $actors->nationality === "russe")
                <img src="{{ asset('img/flag/Flag_of_Russia.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Espagnol" | $actors->nationality === "espagnol" | $actors->nationality === "Espagne" | $actors->nationality === "espagne")
                <img src="{{ asset('img/flag/Flag_of_Spain.svg.png') }}" class="img-responsive" width="100px" height="50%"/>
              @elseif ($actors->nationality === "Turque" | $actors->nationality === "turque" | $actors->nationality === "Turquie" | $actors->nationality === "turquie")
                <img src="{{ asset('img/flag/Flag_of_Turquey.svg.png') }}" class="img-responsive" width="100px" height="50%"/>

              @else
                ?
            @endif
          </td>
          <td>
            {{-- {{ $oscar = "<img src= {{ asset('img/divers/oscar.png') }} class='img-responsive' width='50px' height='50%' />" }} --}}
            {{-- @if ($actors->recompenses >= 1) --}}
              {{-- {{ str_repeat($oscar, $actors->recompenses) }} --}}


            {{-- @else --}}
              ?
            {{-- @endif --}}
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
