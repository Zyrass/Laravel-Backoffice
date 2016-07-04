<div class="col-lg-2">
  <aside>

    <div class="list-group">
      <legend class="text-center">Menu</legend>

        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutfilm" aria-expanded="false" aria-controls="collapseAjoutfilm">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">films</span>
        </a>
        <div class="collapse" id="collapseAjoutfilm">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'movies.index' ) }}">Lister les films</a></li>
              <li><a href="{{ route( 'movies.creer' ) }}">Ajouter un film</a></li>
              <li><a href="{{ route( 'movies.editer' ) }}">Editer un film</a></li>
              <li><a href="{{ route( 'movies.voir' ) }}">Voir d'un film</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutCategorie" aria-expanded="false" aria-controls="collapseAjoutCategorie">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">catégories</span>
        </a>
        <div class="collapse" id="collapseAjoutCategorie">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'categories.index' ) }}">Lister les catégories</a></li>
              <li><a href="{{ route( 'categories.creer' ) }}">Ajouter une catégorie</a></li>
              <li><a href="{{ route( 'categories.editer' ) }}">Editer une catégorie</a></li>
              <li><a href="{{ route( 'categories.voir' ) }}">Voir une catégorie</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutActors" aria-expanded="false" aria-controls="collapseAjoutActors">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">acteurs</span>
        </a>
        <div class="collapse" id="collapseAjoutActors">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'actors.index' ) }}">Lister les acteurs</a></li>
              <li><a href="{{ route( 'actors.creer' ) }}">Ajouter un acteur</a></li>
              <li><a href="{{ route( 'actors.editer' ) }}">Editer un acteur</a></li>
              <li><a href="{{ route( 'actors.voir' ) }}">Voir un acteur</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutDirectors" aria-expanded="false" aria-controls="collapseAjoutDirectors">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">réalisateurs</span>
        </a>
        <div class="collapse" id="collapseAjoutDirectors">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'directors.index' ) }}">Lister les réalisateurs</a></li>
              <li><a href="{{ route( 'directors.creer' ) }}">Ajouter un réalisateur</a></li>
              <li><a href="{{ route( 'directors.editer' ) }}">Editer un réalisateur</a></li>
              <li><a href="{{ route( 'directors.voir' ) }}">Voir un réalisateur</a></li>
            </ul>
          </div>
        </div>

        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutCinemas" aria-expanded="false" aria-controls="collapseAjoutCinemas">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">cinémas</span>
        </a>
        <div class="collapse" id="collapseAjoutCinemas">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'cinemas.index' ) }}">Lister les cinémas</a></li>
              <li><a href="{{ route( 'cinemas.creer' ) }}">Ajouter un cinéma</a></li>
              <li><a href="{{ route( 'cinemas.editer' ) }}">Editer un cinéma</a></li>
              <li><a href="{{ route( 'cinemas.voir' ) }}">Voir un cinéma</a></li>
            </ul>
          </div>
        </div>

        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutSeries" aria-expanded="false" aria-controls="collapseAjoutSeries">
          <i class="fa fa-plus"></i> Gérer les <span class="text-danger">séries</span>
        </a>
        <div class="collapse" id="collapseAjoutSeries">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'series.index' ) }}">Lister les séries</a></li>
              <li><a href="{{ route( 'series.creer' ) }}">Ajouter une série</a></li>
              <li><a href="{{ route( 'series.editer' ) }}">Editer une série</a></li>
              <li><a href="{{ route( 'series.voir' ) }}">Voir une série</a></li>
            </ul>
          </div>
        </div>




      <hr />
      <a class="list-group-item" href="#">
        <i class="fa fa-search"></i> Recherche avancer
      </a>
      <hr />
      <a class="list-group-item" href=" {{ url('/logout')}}">
        ---- Se déconnecter ----
      </a>
      <hr />

      <p> Bonjour : {{ Auth::user()->name }}</p>
      <p> Votre email : {{ Auth::user()->email }}</p>



    </div>

  </aside>
</div>
