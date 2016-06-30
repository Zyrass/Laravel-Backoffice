@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('cinemas.index') }}">Cinéma</a></li>
      <li><a href="{{ route('cinemas.voir') }}">Voir</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Voir un Cinéma</h1>

  </section>


</main>
@endsection
