@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('movies.index') }}">Movies</a></li>
      <li><a href="{{ route('movies.creer') }}">Créer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Insertion d'un nouveau film</h1>

    <div class="col-lg-12" id="divFormAjout">
      <div class="well">
        <h2 class="text-center text-primary">Formulaire d'ajout d'un nouveau Film</h2>

        <form action="{{ route('movies.store' )}}" method="POST">

        {{ csrf_field() }}

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="title">Titre du film</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici...">
            </fieldset>

            <fieldset class="form-group">
              <label for="image">Affiche du film</label>
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
              <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </fieldset>

            <fieldset>
              <label for="languages">Langue du film</label>
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
              <textarea class="form-control" id="synopsis" name="synopsis" rows="5"></textarea>
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="dateRelease">Date de sortie du film</label>
              <input type="text" class="form-control" id="dateRelease" name="dateRelease" placeholder="dd/mm/YYYY">
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="budget">Budget du film</label>
              <input type="text" class="form-control" id="budget" name="budget" placeholder="€">
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              <label for="duree">Durée du film</label>
              <input type="text" class="form-control" id="duree" name="duree" placeholder="En nombre d'heures">
            </fieldset>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>

      </div>

    </div>

  </section>


</main>
@endsection
