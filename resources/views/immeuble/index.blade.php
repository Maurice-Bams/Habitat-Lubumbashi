@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Liste d'immeubles</h1>
            </div>
            <table class="table table-hover">
            	<thead>
            		<tr>
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
            	<tbody>
                    @if(count($immeubles))
                        @foreach($immeubles as $immeuble)
                            <tr>
                                <td>{{ $immeuble->adresse }}</td>
                                <td>{{ $immeuble->type_usage }}</td>
                                <td>{{ $immeuble->nombre_pieces }}</td>
                                <td>{{ $immeuble->superficie }} m2</td>
                                <td>{{ $immeuble->montant_loyer }} $</td>
                                <td>{{ $immeuble->montant_garantie }} $</td>
                                <td>@if($immeuble->verified == "true")<span class="badge badge-success">Oui</span>@else <span class="badge badge-warning">En attente</span> @endif </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                    <form action="#" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger">
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