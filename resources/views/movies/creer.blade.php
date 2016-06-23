@extends ('layout')

@section('content')



<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('movies.index') }}">Movies</a></li>
      <li><a href="{{ route('movies.creer') }}">Ajouter</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Insertion d'un nouveau film</h1>
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{ $error }}
      </div>
    @endforeach
    <div class="col-lg-12" id="divFormAjout">
      <div class="well">
        <h2 class="text-center text-primary">Formulaire d'ajout d'un nouveau Film</h2>

        <form action="{{ route('movies.store' )}}" method="POST">

        {{ csrf_field() }}

          <div class="col-lg-6">
            <fieldset class="form-group">
              @if(!$errors->has('title'))
              <label for="title">Titre du film</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici...">
              @elseif($errors->has('title'))
                <div class="form-group has-error has-feedback">
                  <label for="title" class="text-danger">Titre du film</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici...">
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock" class="help-block">{{ $errors->first("title") }}</span>
                </div>
              @endif
            </fieldset>

            <fieldset class="form-group">
              @if(!$errors->has('image'))
              <label for="image">Affiche du film</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="http://">
              @elseif($errors->has('image'))
                <div class="form-group has-error has-feedback">
                  <label for="image" class="text-danger">Affiche du film</label>
                  <input type="text" class="form-control" id="image" name="image" placeholder="http://">
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock2" class="help-block">{{ $errors->first("image") }}</span>
                </div>
              @endif
            </fieldset>

            <fieldset class="form-group">
              @if(!$errors->has('bo'))
              <label for="bo">BO</label>
              <select class="form-control" id="bo" name="bo">
                <option value="VF">VF</option>
                <option value="VO">VO</option>
                <option value="VOSTFR">VOSTFR</option>
                <option value="VOST">VOST</option>
                <option value="JAP">JAP</option>
              </select>
              @endif
            </fieldset>
          </div>

          <div class="col-lg-6">
            <fieldset class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" placeholder="Veuillez indiquez une petite description du film ici..."></textarea>
            </fieldset>

            <fieldset>
              <label for="languages">Langue du film</label>
              <br />
              <div class="well">
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio1" value="FR"> Français
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio2" value="EN"> Anglais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio3" value="JAP"> Japonais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio4" value="CHN"> Chinois
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

          <button type="submit" class="btn btn-primary btn-block">Envoyer votre nouveau film</button>

        </form>

      </div>

    </div>

  </section>


</main>
@endsection
