@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h1>Liste d'immeubles <a href="{{ route('immeubles.create') }}" class="btn btn-info"><span class="fa fa-plus"><span> Ajouter</a></h1>
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
                                <td>
                                    @if($immeuble->verified == "1")
                                        <span class="text-success fa fa-check-circle"></span> 
                                        <a href="{{ route('immeubles.unverified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour désactiver la vérification"><span class="badge badge-success">Oui</span></a>
                                    @else
                                        <span class="text-danger fa fa-exclamation-triangle"></span>
                                        <a href="{{ route('immeubles.verified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour vérifier"><span class="badge badge-warning">En attente</span</a>
                                    @endif
                                </td>
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
            {{ $immeubles->links('vendor.pagination.simple-bootstrap-4') }}
        </div>
    </div>
@endsection