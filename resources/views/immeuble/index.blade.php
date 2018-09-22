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
                        <th>Avénue</th>
                        <th>Quartier</th>
                        <th>Commune</th>
                        <th>Ville</th>
                        <th>Garantie</th>
                        <th>Loyer</th>
                        <th>Actions</th>
            		</tr>
            	</thead>
            	<tbody>
                    @if(count($immeubles))
                        @foreach($immeubles as $immeuble)
                            <tr>
                                <td>{{ $immeuble->address }}</td>
                                <td>{{ $immeuble->ville }}</td>
                                <td>{{ $immeuble->type_usage }}</td>
                                <td>{{ $immeuble->nombre_pieces }}</td>
                                <td>{{ $immeuble->superficie }} $</td>
                                <td>{{ $immeuble->montant_loyer }} $</td>
                                <td>{{ $immeuble->montant_garantie }} $</td>
                                <td>
                                    <a href="{{ route('immeubles.show', $immeuble->id) }}" class="btn btn-primary"><i class="fa fa-info-circle"></i></a>
                                    <a href="{{ route('immeubles.edit', $immeuble->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Modifier</a>
                                    <form action="{{ route('immeubles.destroy', $immeuble) }}" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                            Supprimer
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