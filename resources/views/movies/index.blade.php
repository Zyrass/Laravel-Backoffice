@extends ('layout')

@section('content')
<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('movies.index') }}">Movies</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Liste de mes films</h1>

    <table class="table table-striped table-bordered table-hover table-responsive">
      <caption>Listing complet de mes films enregistré en base de donnée (BDD)</caption>
      <thead>
        <tr>
          <th>Id</th>
          <th>Image</th>
          <th>Titre</th>
          <th>Synopsis</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($movies as $key => $movies)
        <tr>

          <td><a href="#">{{ $movies->id }}</a></td>
          <td><img src="{{ $movies->image }}" class="img-responsive img-thumbnail" width="100px" height="50%" /></td>
          <td><h4><a>{{ $movies->title }}</a></h4></td>
          <td style="word-break: break-all"><i>{{ strip_tags($movies->synopsis) }}</i></td>
          <td>
            <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search">Voir</span></a>
            <a href="#" class="btn btn-xs btn-warning"><span class="fa fa-edit">Editer</span></a>
            <a href="#" class="btn btn-xs btn-danger"><span class="fa fa-close">Supprimer</span></a>
          </td>

        @endforeach

      </tbody>
    </table>

  </section>


</main>
@endsection
