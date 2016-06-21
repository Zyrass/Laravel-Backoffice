@extends ('layout')

@section('metaDesc') Description de ma page FAQ @endsection

@section('title')@parent- FAQ @endsection

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('faq') }}">FAQ</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">FAQ</h1>

  </section>


</main>
@endsection
