@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('directors.index') }}">Réalisateur</a></li>
      <li><a href="{{ route('directors.editer') }}">Editer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Editer un réalisateur</h1>

  </section>


</main>
@endsection
