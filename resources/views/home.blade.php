@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="alert alert-success">
                        Vous êtes bien enregistré
                    </div>

                    <div class="alert alert-info">
                        Attention vous avez créer un compte administrateur. <br />

                        Pour accédez à une page il faudra saisir :
                        <p class="text-info"><strong>dans votre barre d'adresse : /admin/movies/index</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
