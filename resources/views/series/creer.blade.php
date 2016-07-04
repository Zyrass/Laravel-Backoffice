@extends ('layout')

@section('content')



<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('series.index') }}">Série</a></li>
      <li><a href="{{ route('series.creer') }}">Ajouter</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Insertion d'une nouvelle série</h1>

    <div class="col-lg-12" id="divFormAjout">
      <div class="well">
        <h2 class="text-center text-primary">Formulaire d'ajout d'une nouvelle série</h2>

        <form action="{{ route('series.store' )}}" method="POST">

        {{ csrf_field() }}

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="title">Titre</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre de la série">
            </fieldset>

            <fieldset class="form-group">
              <label for="image">Affiche</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="http(s)://(www.) avec comme extenssion : (.jpeg|.png|.jpg)">
            </fieldset>

          </div>

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="nbseasons">Nombre de saison</label>
              <select class="form-control" id="nbseasons" name="nbseasons">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
              </select>
            </fieldset>

            <fieldset class="form-group">
              <label for="nbepisodes">Nombre d'épisode(s) toutes saisons confondu</label>
              <input type="text" class="form-control" id="nbepisodes" name="nbepisodes" placeholder="Ex : 240">
            </fieldset>
          </div>

          <div class="col-lg-12">
            <fieldset class="form-group">
              <label for="synopsis">Synopsis</label>
              <textarea class="form-control" id="synopsis" name="synopsis" rows="5" placeholder="Veuillez indiquez le synopsis du film ici..."></textarea>
            </fieldset>
          </div>

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="anneerelease">Année de sortie de la série</label>
              <input type="text" class="form-control" id="anneerelease" name="anneerelease" placeholder="YYYY">
            </fieldset>
          </div>

          {{-- <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="duree">Durée de la serie</label>
              <input type="text" class="form-control" id="duree" name="duree" placeholder="xx:xx:xx / xx:xx / xxHxxMIN / xxHxxMINxxSEC">
            </fieldset>
          </div> --}}

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="prod">En production</option>
                <option value="acheve">Achevé</option>
                <option value="stop">Arrêté</option>
              </select>
            </fieldset>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Envoyer votre nouvelle série</button>

        </form>

    </div>

  </section>


</main>
@endsection
