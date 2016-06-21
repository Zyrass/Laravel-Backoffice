@extends ('layout')

@section('metaDesc') Description du concept @endsection

@section('title')@parent- Concept @endsection

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="{{ route('concept') }}">Concept</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Concept</h1>

  </section>


</main>
@endsection


  @section('js')
    @parent
    <script type="text/javascript" src="{{ asset('js/concept.js') }}"> </script>
  @endsection
