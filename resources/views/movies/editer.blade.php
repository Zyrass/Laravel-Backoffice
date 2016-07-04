@extends ('layout')

@section('content')



<main>
  <section>

    <ol class="breadcrumb text-right">
      <li><a href="{{ route('movies.index') }}">Movies</a></li>
      <li><a href="{{ route('movies.editer') }}">Editer</a></li>
      <li class="active">Vous êtes là</li>
    </ol>

    <h1 class="text-center">Edition d'un nouveau film</h1>
    {{-- <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div> --}}
    <div class="col-lg-12" id="divFormAjout">
      <div class="well">
        <h2 class="text-center text-primary">Formulaire d'édition du film {{ $movies->title }}</h2>

        <form action="{{ route('movies.store' )}}" method="POST">

        {{ csrf_field() }}

          <div class="col-lg-6">
            <fieldset class="form-group">
              @if(!$errors->has('title'))
              <label for="title">Titre du film</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici..." value="{{ $movies->title }}">
              @elseif($errors->has('title'))
                <div class="form-group has-error has-feedback">
                  <label for="title" class="text-danger">Titre du film</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Entrée le titre du film ici..." value="{{ $movies->title }}">
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock" class="help-block">{{ $errors->first("title") }}</span>
                </div>
              @endif
            </fieldset>

            <fieldset class="form-group">
              @if(!$errors->has('bo'))
              <label for="bo">BO</label>
              <select class="form-control" id="bo" name="bo">
                <option value="VF">VF</option>
                <option value="VO">VO</option>
                <option value="VOSTFR">VOSTFR</option>
                <option value="VOST">VOST</option>
                <option value="JAP">JAP</option>
              </select>
              @elseif($errors->has('bo'))
              <div class="form-group has-error has-feedback">
                <label for="bo" class="text-danger">BO</label>
                <select class="form-control" id="bo" name="bo">
                  <option value="VF">VF</option>
                  <option value="VO">VO</option>
                  <option value="VOSTFR">VOSTFR</option>
                  <option value="VOST">VOST</option>
                  <option value="JAP">JAP</option>
                </select>
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="helpBlock2" class="help-block">{{ $errors->first("bo") }}</span>
              </div>
              @endif
            </fieldset>
          </div>

          <div class="col-lg-6">
            <fieldset class="form-group">
              @if(!$errors->has('description'))
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="4" placeholder="Veuillez indiquez une petite description du film ici..." value="{{ $movies->description }}"></textarea>
              @elseif($errors->has('description'))
              <div class="form-group has-error has-feedback">
                <label for="description" class="text-danger">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Veuillez indiquez une petite description du film ici..." value="{{ $movies->description }}"></textarea>
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="helpBlock3" class="help-block">{{ $errors->first("description") }}</span>
              </div>
              @endif
            </fieldset>



            <fieldset>
              @if (!$errors->has('languages'))
              <label for="languages">Langue du film</label>
              <br />
              <div class="well">
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio1" value="FR"> Français
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio2" value="EN"> Anglais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio3" value="JAP"> Japonais
                </label>
                <label class="radio-inline">
                  <input type="radio" name="languages" id="inlineRadio4" value="CHN"> Chinois
                </label>
              </div>
              @elseif ($errors->has('languages'))
                <div class="form-group has-error has-feedback">
                  <label for="languages" class="text-danger">Langue du film </label>
                  <div class="well">
                    <label class="radio-inline">
                      <input type="radio" name="languages" id="inlineRadio1" value="FR"> Français
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="languages" id="inlineRadio2" value="EN"> Anglais
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="languages" id="inlineRadio3" value="JAP"> Japonais
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="languages" id="inlineRadio4" value="CHN"> Chinois
                    </label>
                  </div>
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock4" class="help-block">{{ $errors->first("languages") }}</span>
                </div>
              @endif
            </fieldset>
          </div>


          <div class="col-lg-12">
            <fieldset class="form-group">
              @if (!$errors->has('synopsis'))
              <label for="synopsis">Synopsis</label>
              <textarea class="form-control" id="synopsis" name="synopsis" rows="5" placeholder="Veuillez indiquez le synopsis du film ici..."></textarea>
              @elseif ($errors->has('synopsis'))
                <div class="form-group has-error has-feedback">
                  <label for="synopsis" class="text-danger">Description</label>
                  <textarea class="form-control" id="synopsis" name="synopsis" rows="5" placeholder="Veuillez indiquez le synopsis du film ici..."></textarea>
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock5" class="help-block">{{ $errors->first("description") }}</span>
                </div>
              @endif
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              @if (!$errors->has('dateRelease'))
              <label for="dateRelease">Date de sortie du film</label>
              <input type="text" class="form-control" id="dateRelease" name="dateRelease" placeholder="d/m/Y">
              @elseif ($errors->has('dateRelease'))
                <div class="form-group has-error has-feedback">
                  <label for="dateRelease" class="text-danger">Date de sortie du film</label>
                  <input type="text" class="form-control" id="dateRelease" name="dateRelease" placeholder="d/m/Y">
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock6" class="help-block">{{ $errors->first("dateRelease") }}</span>
                </div>
              @endif
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              @if(!$errors->has('budget'))
              <label for="budget">Budget du film</label>
              <input type="text" class="form-control" id="budget" name="budget" placeholder="€">
              @elseif($errors->has('budget'))
                <div class="form-group has-error has-feedback">
                  <label for="budget" class="text-danger">Budget du film</label>
                  <input type="text" class="form-control" id="budget" name="budget" placeholder="€">
                  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  <span id="helpBlock7" class="help-block">{{ $errors->first("budget") }}</span>
                </div>
              @endif
            </fieldset>
          </div>

          <div class="col-lg-4">
            <fieldset class="form-group">
              @if(!$errors->has('duree'))
              <label for="duree">Durée du film</label>
              <input type="text" class="form-control" id="duree" name="duree" placeholder="En nombre d'heures">
              @elseif($errors->has('duree'))
              <div class="form-group has-error has-feedback">
                <label for="duree" class="text-danger">Durée du film</label>
                <input type="text" class="form-control" id="duree" name="duree" placeholder="En nombre d'heures">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="helpBlock8" class="help-block">{{ $errors->first("duree") }}</span>
              </div>
              @endif
            </fieldset>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Envoyer votre nouveau film</button>

        </form>

      </div>

    </div>

  </section>


</main>
@endsection
