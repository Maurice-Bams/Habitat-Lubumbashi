@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="page-header">
            <h3>Créer un immeuble</h3>
        </div>
        {!! form_start($form) !!}
        <div class="row">
            <div class="col-sm-4">
                {!! form_row($form->ville) !!}
                {!! form_row($form->commune) !!}
                {!! form_row($form->quartier) !!}
                {!! form_row($form->numero) !!}
                {!! form_row($form->avenue) !!}
                {!! form_row($form->type_usage) !!}
            </div>
            <div class="col-sm-4">
                {!! form_row($form->nombre_piece) !!}
                {!! form_row($form->superficie) !!}
                {!! form_row($form->montant_garantie) !!}
                {!! form_row($form->montant_loyer) !!}
            </div>
            <div class="col-sm-4">
                {!! form_rest($form) !!}
            </div>
        </div>
        {!! form_end($form) !!}
    </div>
@endsection