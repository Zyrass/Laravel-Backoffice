@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('categories.index') }}">Catégorie</a></li>
      <li><a href="{{ route('categories.creer') }}">Ajouter</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Nouvelle catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
      {{ csrf_field() }}

      <div class="well col-lg-offset-2 col-lg-8" id="divFormAjout">
        <h2 class="text-center text-primary">Formulaire d'ajout d'une nouvelle catégorie</h2>
        <hr />
        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="title">Titre de la catégorie</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inscrivez le prénom titre de la catégorie">
          </fieldset>
        </div>
        <div class="col-lg-6">
          <fieldset class="form-group">
            <label for="slug">Genre de la catégorie</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Inscrivez le genre de la catégorie">
          </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset class="form-group">
            <label for="description">Description de la catégorie</label>
            <textarea name="description" class="form-control" id="description" rows="4" cols="40" placeholder="Inscrivez la description de la catégorie"></textarea>
          </fieldset>
        </div>

        <div class="col-lg-offset-2 col-lg-8">
          <fieldset class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Envoyer votre nouvelle catégorie</button>
          </fieldset>
        </div>

      </div>
    </form>


  </section>


</main>
@endsection
