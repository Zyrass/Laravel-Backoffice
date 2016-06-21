@extends ('layout')

@section('metaDesc') Description de ma page Contact @endsection

@section('title')@parent- Contact @endsection

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Contact</h1>

  </section>


</main>
@endsection
