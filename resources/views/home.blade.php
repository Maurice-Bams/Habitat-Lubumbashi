@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes bien connecté!
                </div>

            </div>
        </div>
    </div>
      
            <h2>Ajouter immeuble</h2>
            
            <form class="form-horizontal" method="POST" action="{{ route('immeubles') }}">
                        {{ csrf_field() }}
              <div class="row">
                    <div class="col-md-6">
                        <h5>Adresse de l'immeuble</h5>
                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control" name="ville" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('commune') ? ' has-error' : '' }}">
                            <label for="commune" class="col-md-4 control-label">Commune</label>

                            <div class="col-md-6">
                                <input id="commune" type="text" class="form-control" name="commune" value="{{ old('commune') }}" required autofocus>

                                @if ($errors->has('commune'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('commune') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('quartier') ? ' has-error' : '' }}">
                            <label for="quartier" class="col-md-4 control-label">Quartier</label>

                            <div class="col-md-6">
                                <input id="quartier" type="text" class="form-control" name="quartier" value="{{ old('quartier') }}" required autofocus>

                                @if ($errors->has('quartier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quartier') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('avenue') ? ' has-error' : '' }}">
                            <label for="avenue" class="col-md-4 control-label">Avenue</label>

                            <div class="col-md-6">
                                <input id="avenue" type="text" class="form-control" name="avenue" value="{{ old('avenue') }}" required autofocus>

                                @if ($errors->has('avenue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avenue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="numero" class="col-md-4 control-label">Numero</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type_usage') ? ' has-error' : '' }}">
                            <label for="type_usage" class="col-md-4 control-label">Type_usage</label>

                            <div class="col-md-6">
                                <select name="type_usage" id="type_usage" class="form-control">
                                    <option value="residentiel">Résidentiel</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="socio_culturel">Socio-culturel</option>
                                    
                                </select>

                                @if ($errors->has('type_usage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_usage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                
                
                    <div class="col-md-6">     
                        <h5>Autres renseignements</h5>
                        <div class="form-group{{ $errors->has('nombre_pieces') ? ' has-error' : '' }}">
                            <label for="nombre_pieces" class="col-md-4 control-label">Nombre_pieces</label>

                            <div class="col-md-6">
                                <input id="nombre_pieces" type="text" class="form-control" name="nombre_pieces" value="{{ old('nombre_pieces') }}" required autofocus>

                                @if ($errors->has('nombre_pieces'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_pieces') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('superficie') ? ' has-error' : '' }}">
                            <label for="superficie" class="col-md-4 control-label">Superficie(m²)</label>

                            <div class="col-md-6">
                                <input id="superficie" type="text" class="form-control" name="superficie" value="{{ old('superficie') }}" required autofocus>

                                @if ($errors->has('superficie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('superficie') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('montant_garantie') ? ' has-error' : '' }}">
                            <label for="montant_garantie" class="col-md-4 control-label">Montant_garantie</label>

                            <div class="col-md-6">
                                <input id="montant_garantie" type="text" class="form-control" name="montant_garantie" value="{{ old('montant_garantie') }}" required autofocus>

                                @if ($errors->has('montant_garantie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('montant_garantie') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('montant_loyer') ? ' has-error' : '' }}">
                            <label for="montant_loyer" class="col-md-4 control-label">Montant_loyer</label>

                            <div class="col-md-6">
                                <input id="montant_loyer" type="text" class="form-control" name="montant_loyer" value="{{ old('montant_loyer') }}" required autofocus>

                                @if ($errors->has('montant_loyer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('montant_loyer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Illustration</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Soumettre
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">   
                            <div class="panel-heading">Immeubles en attente de validation</div>
                                <div class="panel-body"> 
                                    @foreach 
                                        {{$user->name}}
                                    @endforeach
                                </div>  
                        </div>              
                    </div>
                </div>
                <br>  
            </div>
        </form>            
</div>
@endsection
