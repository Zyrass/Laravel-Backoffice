@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('cinemas.index') }}">Cinéma</a></li>
      <li><a href="{{ route('cinemas.editer') }}">Editer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Editer un nouveau cinéma</h1>

  </section>


</main>
@endsection
