<div class="col-lg-2">
  <aside>

    <div class="list-group">
      <legend class="text-center">Menu</legend>

        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutfilm" aria-expanded="false" aria-controls="collapseAjoutfilm">
          <i class="fa fa-plus"></i> Gérer les films
        </a>
        <div class="collapse" id="collapseAjoutfilm">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'movies.index' ) }}">Lister les films</a></li>
              <li><a href="{{ route( 'movies.creer' ) }}">Créer un film</a></li>
              <li><a href="{{ route( 'movies.editer' ) }}">Editer un film</a></li>
              <li><a href="{{ route( 'movies.voir' ) }}">Voir d'un film</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutCategorie" aria-expanded="false" aria-controls="collapseAjoutCategorie">
          <i class="fa fa-plus"></i> Gérer les catégories
        </a>
        <div class="collapse" id="collapseAjoutCategorie">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'categories.index' ) }}">Lister les catégories</a></li>
              <li><a href="{{ route( 'categories.creer' ) }}">Créer une catégorie</a></li>
              <li><a href="{{ route( 'categories.editer' ) }}">Editer une catégorie</a></li>
              <li><a href="{{ route( 'categories.voir' ) }}">Voir une catégorie</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutActors" aria-expanded="false" aria-controls="collapseAjoutActors">
          <i class="fa fa-plus"></i> Gérer les acteurs
        </a>
        <div class="collapse" id="collapseAjoutActors">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'actors.index' ) }}">Lister les acteurs</a></li>
              <li><a href="{{ route( 'actors.creer' ) }}">Créer un acteur</a></li>
              <li><a href="{{ route( 'actors.editer' ) }}">Editer un acteur</a></li>
              <li><a href="{{ route( 'actors.voir' ) }}">Voir un acteur</a></li>
            </ul>
          </div>
        </div>


        <a class="list-group-item collapse" role="button" data-toggle="collapse" href="#collapseAjoutDirectors" aria-expanded="false" aria-controls="collapseAjoutDirectors">
          <i class="fa fa-plus"></i> gérer les directeurs
        </a>
        <div class="collapse" id="collapseAjoutDirectors">
          <div class="well">
            <ul>
              <li><a href="{{ route( 'directors.index' ) }}">Lister les directeurs</a></li>
              <li><a href="{{ route( 'directors.creer' ) }}">Créer un directeur</a></li>
              <li><a href="{{ route( 'directors.editer' ) }}">Editer un directeur</a></li>
              <li><a href="{{ route( 'directors.voir' ) }}">Voir un directeur</a></li>
            </ul>
          </div>
        </div>



      <hr />
      <a class="list-group-item" href="#">
        <i class="fa fa-search"></i> Recherche avancer
      </a>
      <hr />
      <a class="list-group-item" href="#">
        <i class="fa fa-lock"></i> Se connecter
      </a>
      <hr />



    </div>

  </aside>
</div>
