@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('categories.index') }}">Catégorie</a></li>
      <li><a href="{{ route('categories.creer') }}">Créer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Nouvelle catégorie</h1>

  </section>


</main>
@endsection
