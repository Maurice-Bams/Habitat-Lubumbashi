@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                    <!--div class="btn-add-im">
                        <button><a href="/immeubles"> Ajouter immeuble</a></button>
                    </div>-->     
                    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>

            <h1>Ajouter immeuble</h1>
            
            {!! Form::open(['url' => 'immeubles/submit']) !!}

            <div class="form-group">
                {{Form::label('adresse', 'Adresse')}}
                {{Form::text('adresse', '',['class'=>'form-control', 'placeholder'=>'Adresse complète de l\'immeuble'])}}
            </div>
            <div class="form-group">
                {{Form::label('usage', 'Usage')}}
                {{Form::text('usage', '',['class'=>'form-control', 'placeholder'=>'commercial, socio-culturel, residentiel...'])}}
            </div>
            <div class="form-group">
                {{Form::label('piece', 'Nombre des Pièces')}}
                {{Form::text('piece', '',['class'=>'form-control', 'placeholder'=>'Entrez le nombre de pièces'])}}
            </div>
            <div class="form-group">
                {{Form::label('superficie', 'Superficie')}}
                {{Form::text('superficie', '',['class'=>'form-control', 'placeholder'=>'Saisir la superficie en m2'])}}
            </div>
            <div class="form-group">
                {{Form::label('garantie', 'Garantie')}}
                {{Form::text('garantie', '',['class'=>'form-control', 'placeholder'=>'Montant de garantie'])}}
            </div>
            <div class="form-group">
                {{Form::label('loyer', 'Loyer')}}
                {{Form::text('loyer', '',['class'=>'form-control', 'placeholder'=>'Loyer mensuel'])}}
            </div>
            <div class="form-group">
                {{Form::label('image', 'Image')}}
                {{Form::file('image', '',['class'=>'form-control', 'placeholder'=>'image de l\'immeuble'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', '',['class'=>'form-control', 'placeholder'=>'Brêve description de l\'immeuble'])}}
            </div>
            <div>
                {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
