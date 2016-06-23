@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('cinemas.index') }}">Cinéma</a></li>
      <li><a href="{{ route('cinemas.creer') }}">Ajouter</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Ajouter un nouveau cinéma en BDD</h1>

    <form action="{{ route('cinemas.store') }}" method="POST">
      {{ csrf_field() }}

      <div class="well col-lg-offset-2 col-lg-8" id="divFormAjout">
        <h2 class="text-center text-primary">Formulaire d'ajout d'un nouveau cinéma</h2>
        <hr />
        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="title">Nom du cinéma</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inscrivez le nom du cinéma">
          </fieldset>
        </div>
        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="ville">Nom de la ville</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Inscrivez le nom de la ville">
          </fieldset>
        </div>
        <div class="col-lg-12 well">
          <legend>Adresse du Cinéma</legend>
            <div class="col-lg-3">
              <fieldset class="form-group">
                <label for="numero">Numéro</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="N° de la rue">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset class="form-group">
                <label for="adress">Rue (adresse)</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Inscrivez l'adresse ici...">
              </fieldset>
            </div>
            <div class="col-lg-3">
              <fieldset class="form-group">
                <label for="cp">Code postal</label>
                <input type="text" class="form-control" id="cp" name="cp" placeholder="Ex : 69330">
              </fieldset>
            </div>
          </div>

          <div class="col-lg-12">
            <fieldset class="form-group">
              <label for="logo">Logo du cinéma</label>
              <input type="text" class="form-control" id="logo" name="logo" placeholder="http://....">
            </fieldset>
          </div>

          <div class="col-lg-offset-2 col-lg-8">
            <fieldset class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Envoyer votre nouveau cinéma</button>
            </fieldset>
          </div>

        </div>



      </div>
    </form>


  </section>


</main>
@endsection
