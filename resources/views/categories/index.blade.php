@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('categories.index') }}">Catégorie</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <hr />

    <h1 class="text-center">Liste de mes catégories</h1>

    <table class="table table-striped table-bordered table-hover table-responsive text-center">
      <caption class="text-center">Listing complet des mes acteurs inscrits en base de données BDD</caption>
      <thead>
        <tr>
          <th>Id</th>
          <th>Titre de la catégorie</th>
          <th>Description</th>
          <th>Genre</th>
          <th>Nombre de film</th>
        </tr>
      </thead>
      <tbody>

        @foreach($categories as $key => $categories)
        <tr>

          <td><a href="#">{{ $categories->id }}</a></td>
          <td><h4><a>{{ $categories->title }}</a></h4></td>
          <td style="word-break: break-all"><i>{{ strip_tags($categories->description) }}</i></td>
          <td>
            @if ($categories->slug === "Action")
              Action
              @elseif ($categories->slug === "Animation")
                Animation
              @elseif ($categories->slug === "Arts Martiaux")
                Arts Martiaux
              @elseif ($categories->slug === "Aventure")
                Aventure
              @elseif ($categories->slug === "Biopic")
                Biopic
              @elseif ($categories->slug === "Classique")
                Classique
              @elseif ($categories->slug === "Comédie" | $categories->slug === "Comédie dramatique")
                Comédie / Comédie dramatique
              @elseif ($categories->slug === "Concert")
                Concert
              @elseif ($categories->slug === "Drame")
                Drame
              @elseif ($categories->slug === "Documentaire")
                Documentaire
              @elseif ($categories->slug === "Epouvante" | $categories->slug === "Horreur")
                Epouvante / Horreur
              @elseif ($categories->slug === "Espionnage")
                Espionnage
              @elseif ($categories->slug === "Famille")
                Famille
              @elseif ($categories->slug === "Fantastique")
                Fantastique
              @elseif ($categories->slug === "Guerre")
                Guerre
              @elseif ($categories->slug === "Historique")
                Historique
              @elseif ($categories->slug === "Judiciaire")
                Judiciaire
              @elseif ($categories->slug === "Péplum")
                Péplum
              @elseif ($categories->slug === "Policier")
                Policier
              @elseif ($categories->slug === "Romance")
                Romance
              @elseif ($categories->slug === "Science fiction")
                Science fiction
              @elseif ($categories->slug === "Show" | $categories->slug === "Spectacle")
                Show / Spectacle
              @elseif ($categories->slug === "Sport")
                Sport
              @elseif ($categories->slug === "Western")
                Western
              @else
                - NON REFERENCER -
            @endif
          </td>
          <td>
            Je ne sais pas compter
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
