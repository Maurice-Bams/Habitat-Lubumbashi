@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3>Ajouter un immeuble</h3>
            </div>
            {!! form_start($form) !!}
            <div class="row">
                <div class="col-sm-4">
                    {!! form_row($form->ville) !!}
                    {!! form_row($form->commune) !!}
                    {!! form_row($form->quartier) !!}
                    {!! form_row($form->numero) !!}
                    {!! form_row($form->avenue) !!}
                </div>
                <div class="col-sm-4">
                    {!! form_row($form->type_usage) !!}
                    {!! form_row($form->nombre_piece) !!}
                    {!! form_row($form->superficie) !!}
                    {!! form_row($form->montant_garantie) !!}
                    {!! form_row($form->montant_loyer) !!}
                </div>
                <div class="col-sm-4">
                    {!! form_row($form->description) !!}
                    {!! form_row($form->image) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    {!! form_rest($form) !!}
                </div>
            </div>
            
        </div>
        <div class="col-12">
            <div class="page-header">
                <h3>Liste d'immeubles</h3>
            </div>
            <table class="table table-hover table-sm table-bordered">
            	<thead class="thead-dark">
            		<tr>
                        <th>#</th>
                        <th>Adress</th>
                        <th>Type Usage</th>
                        <th>Nombre pièces</th>
                        <th>Superficie</th>
                        <th>Loyer</th>
                        <th>Garantie</th>
                        <th>Verifié</th>
                        <th>Actions</th>
            		</tr>
            	</thead>
            	<tbody class="text-sm">
                    @if(count($immeubles))
                        @foreach($immeubles as $immeuble)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $immeuble->adresse }}</td>
                                <td>{{ $immeuble->type_usage }}</td>
                                <td>{{ $immeuble->nombre_pieces }}</td>
                                <td>{{ $immeuble->superficie }} m2</td>
                                <td>{{ $immeuble->montant_loyer }} $</td>
                                <td>{{ $immeuble->montant_garantie }} $</td>
                                <td>@if($immeuble->verified == "1")<span class="badge badge-success">Oui</span>@else <span class="badge badge-warning">En attente</span> @endif </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-info text-center">
                                <strong>Aucun n'immeuble n'est enregistré.</strong>
                            </td>
                        </tr>
                    @endif
            	</tbody>
            </table>
            {{ $immeubles->links() }}
        </div>
    </div>
@endsection