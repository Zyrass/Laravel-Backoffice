@extends ('layout')

@section('metaDesc') On parle de nous dans la presse @endsection

@section('title')@parent- Presse @endsection

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('presse') }}">Presse</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Ils parlent de nous</h1>

  </section>


</main>
@endsection
