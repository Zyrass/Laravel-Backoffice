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
    {{-- <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div> --}}
    <form action="{{ route('categories.store') }}" method="POST">
      {{ csrf_field() }}

      <div class="well col-lg-12" id="divFormAjout">
        <h2 class="text-center text-primary">Formulaire d'ajout d'une nouvelle catégorie</h2>
        <hr />
        <div class="col-lg-6">
          <fieldset class="form-group">
            @if(!$errors->has('title'))
            <label for="title">Titre de la catégorie</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inscrivez le prénom titre de la catégorie">
          @elseif($errors->has('title'))
              <div class="form-group has-error has-feedback">
                <label for="title" class="text-danger">Titre de la catégorie</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inscrivez le prénom titre de la catégorie">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="helpBlock" class="help-block">{{ $errors->first("title") }}</span>
              </div>
            @endif
          </fieldset>
        </div>
        <div class="col-lg-6">
          <fieldset class="form-group">
            @if(!$errors->has('slug'))
            <label for="slug">Genre de la catégorie</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Inscrivez le genre de la catégorie">
            @elseif($errors->has('slug'))
              <div class="form-group has-error has-feedback">
                <label for="slug" class="text-danger">Genre de la catégorie</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Inscrivez le genre de la catégorie">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="helpBlock2" class="help-block">{{ $errors->first("slug") }}</span>
              </div>
            @endif
          </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset class="form-group">
            @if(!$errors->has('description'))
            <label for="description">Description de la catégorie</label>
            <textarea name="description" class="form-control" id="description" rows="4" cols="40" placeholder="Inscrivez la description de la catégorie"></textarea>
          @elseif($errors->has('description'))
            <div class="form-group has-error has-feedback">
              <label for="description" class="text-danger">Description de la catégorie</label>
              <textarea name="description" class="form-control" id="description" rows="4" cols="40" placeholder="Inscrivez la description de la catégorie"></textarea>
              <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
              <span id="helpBlock3" class="help-block">{{ $errors->first("description") }}</span>
            </div>
            @endif
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
