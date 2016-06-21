@extends ('layout')

@section('metaDesc') Description de ma A propos About @endsection

@section('title')@parent- A propos @endsection

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('about') }}">A propos</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">A propos</h1>

  </section>


</main>
@endsection
