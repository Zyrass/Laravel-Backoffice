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
              <input type="text" class="form-control" id="image" name="image" placeholder="http://">
            </fieldset>

            <fieldset class="form-group">
              <label for="bo">BO</label>
              <select class="form-control" id="bo" name="bo">
                <option>VF</option>
                <option>VO</option>
                <option>VOSTFR</option>
                <option>VOST</option>
                <option>JAP</option>
              </select>
            </fieldset>
          </div>

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" placeholder="Veuillez indiquez une petite description du film ici..."></textarea>
            </fieldset>

            <fieldset>
              <label for="languages">Langue de la série</label>
              <br />
              <div class="well">
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio1" value="option1"> Français
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio2" value="option2"> Anglais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio3" value="option3"> Japonais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio4" value="option4"> Chinois
                </label>
              </div>
            </fieldset>
          </div>


          <div class="col-lg-12">
            <fieldset class="form-group">
              <label for="synopsis">Synopsis</label>
              <textarea class="form-control" id="synopsis" name="synopsis" rows="5" placeholder="Veuillez indiquez le synopsis du film ici..."></textarea>
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="dateRelease">Date de sortie de la série</label>
              <input type="text" class="form-control" id="dateRelease" name="dateRelease" placeholder="dd/mm/YYYY">
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="nbseason">Nombre de saison</label>
              <input type="text" class="form-control" id="nbseason" name="nbseason" placeholder="€">
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="duree">Durée de la serie</label>
              <input type="text" class="form-control" id="duree" name="duree" placeholder="En nombre d'heures">
            </fieldset>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Envoyer votre nouvelle série</button>

        </form>

      </div>

    </div>

  </section>


</main>
@endsection
