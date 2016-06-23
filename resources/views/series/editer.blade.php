@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('series.index') }}">Série</a></li>
      <li><a href="{{ route('series.editer') }}">Editer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Editer une série</h1>

  </section>


</main>
@endsection
