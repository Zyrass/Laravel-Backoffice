@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('series.index') }}">Série</a></li>
      <li><a href="{{ route('series.voir') }}">Voir</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Voir la série</h1>

    <div class="col-md-12 well">

    </div>

  </section>


</main>
@endsection
