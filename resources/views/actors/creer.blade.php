@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('actors.index') }}">Acteurs</a></li>
      <li><a href="{{ route('actors.creer') }}">Ajouter</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Ajout d'un acteur en base de donnée</h1>

    <form action="{{ route('actors.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="well col-lg-12" id="divFormAjout">
        <h2 class="text-center text-primary">Formulaire d'ajout d'un nouvel acteur</h2>
        <hr />
        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Inscrivez le prénom ici">
          </fieldset>

          <fieldset class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Inscrivez le nom ici">
          </fieldset>

          <fieldset class="form-group">
            <label for="sex">Sexe | <span class="text-info">m</span> = Masculin &amp; <span class="text-danger">f</span> = Féminin</label>
            <select class="form-control" id="sex" name="sex">
              <option value="m">m</option>
              <option value="f">f</option>
            </select>
          </fieldset>

          <fieldset class="form-group">
            <label for="dob">Date de naissance</label>
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Inscrivez la date de naissance au format : dd/mm/YYYY">
          </fieldset>

          <fieldset class="form-group">
            <label for="nationality">Nationalité</label>
            <select class="form-control" id="nationality" name="nationality">
              <option value="ALG">Algérie</option>
              <option value="ALL">Allemand</option>
              <option value="ENG">Anglais</option>
              <option value="ARG">Argentine</option>
              <option value="AUS">Autriche</option>
              <option value="BE">Belgique</option>
              <option value="BRE">Brazil</option>
              <option value="CHN">Chinois</option>
              <option value="ESP">Espagne</option>
              <option value="USA">Etats-Unis</option>
              <option value="FR">France</option>
              <option value="JAP">Japon</option>
              <option value="QAT">Qatar</option>
              <option value="TUR">Turquie</option>
            </select>
          </fieldset>
        </div>

        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="image">Portrait de l'acteur</label>
            <input type="file" class="form-control" id="image" name="image">
          </fieldset>

          <fieldset class="form-group">
            <label for="biography">Biographie</label>
            <textarea name="biography" id="biography" class="form-control" rows="9" cols="40" placeholder="Veuillez indiquez la biographie de l'acteur"></textarea>
          </fieldset>

          <fieldset class="form-group">
            <label for="note">Note de l'acteur</label>
            <select class="form-control" id="note" name="note">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </fieldset>
        </div>

        <div class="col-lg-offset-4 col-lg-4">
          <fieldset class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Envoyer votre nouvel acteur</button>
          </fieldset>
        </div>

      </div>
    </form>


  </section>


</main>
@endsection
