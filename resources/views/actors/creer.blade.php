@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('actors.index') }}">Acteurs</a></li>
      <li><a href="{{ route('actors.creer') }}">Créer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Nouvel Acteur</h1>

  </section>


</main>
@endsection
