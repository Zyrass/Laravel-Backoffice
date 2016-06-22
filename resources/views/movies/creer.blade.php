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
        <h2 class="text-right">Formulaire d'ajout de nouveau Film</h2>

        <form action="{{ route('movies.store' )}}" method="POST">

        {{ csrf_field() }}

          <fieldset class="form-group">
            <label for="title">Titre du film</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici...">
          </fieldset>

          <fieldset class="form-group">
            <label for="image">Affiche du film</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="http://">
          </fieldset>

          <fieldset class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2"></textarea>
          </fieldset>

          <fieldset class="form-group">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="5"></textarea>
          </fieldset>

          <fieldset class="form-group">
            <label for="dateRelease">Date de sortie du film</label>
            <input type="text" class="form-control" id="dateRelease" name="dateRelease" placeholder="dd/mm/YYYY">
          </fieldset>

          <fieldset class="form-group">
            <label for="budget">Budget du film</label>
            <input type="text" class="form-control" id="budget" name="budget" placeholder="€">
          </fieldset>

          <fieldset class="form-group">
            <label for="duree">Durée du film</label>
            <input type="text" class="form-control" id="duree" name="duree" placeholder="En nombre d'heures">
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

          <fieldset class="form-group">
            <label for="duree">Langue du film</label>
            <div class="btn-group btn-group-horizontal" data-toggle="buttons">
              <label class="btn active">
                <input type="radio" name='gender1' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> <span>  Français</span>
              </label>
              <label class="btn">
                <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Anglais</span>
              </label>
              <label class="btn">
                <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Italien</span>
              </label>
              <label class="btn">
                <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Japonais</span>
              </label>
            </div>
          </fieldset>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>

      </div>

    </div>

  </section>


</main>
@endsection
