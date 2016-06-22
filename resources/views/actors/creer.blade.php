@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('actors.index') }}">Acteurs</a></li>
      <li><a href="{{ route('actors.creer') }}">Créer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Ajout d'un acteur en base de donnée</h1>

    <form action="{{ route('actors.store') }}" method="POST">
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
              <option>m</option>
              <option>f</option>
            </select>
          </fieldset>

          <fieldset class="form-group">
            <label for="dob">Date de naissance</label>
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Inscrivez la date de naissance au format : dd/mm/YYYY">
          </fieldset>

          <fieldset class="form-group">
            <label for="nationality">Nationalité</label>
            <select class="form-control" id="nationality" name="nationality">
              <option>Algérie</option>
              <option>Allemand</option>
              <option>Anglais</option>
              <option>Argentine</option>
              <option>Autriche</option>
              <option>Belgique</option>
              <option>Brazil</option>
              <option>Chinois</option>
              <option>Espagne</option>
              <option>Etats-Unis</option>
              <option>France</option>
              <option>Japon</option>
              <option>Qatar</option>
              <option>Turquie</option>
            </select>
          </fieldset>
        </div>

        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="image">Portrait de l'acteur</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Saisissez l'url du portrait de l'acteur au format jpg">
          </fieldset>

          <fieldset class="form-group">
            <label for="biography">Biographie</label>
            <textarea name="biography" id="biography" class="form-control" rows="9" cols="40" placeholder="Veuillez indiquez la biographie de l'acteur"></textarea>
          </fieldset>

          <fieldset class="form-group">
            <label for="note">Note de l'acteur</label>
            <select class="form-control" id="note" name="note">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </fieldset>
        </div>

        <div class="col-lg-offset-4 col-lg-4">
          <fieldset class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Envoyer votre enregistrement</button>
          </fieldset>
        </div>

      </div>
    </form>


  </section>


</main>
@endsection
