@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('directors.index') }}">Réalisateur</a></li>
      <li><a href="{{ route('directors.voir') }}">Voir</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Voir le réalisateur</h1>

  </section>


</main>
@endsection
