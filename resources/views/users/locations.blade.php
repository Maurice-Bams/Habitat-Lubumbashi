@extends('layouts.app')

@section('content')
        <div class="col-sm-12">
            <div class="page-header">
                <h3>Liste d'immeubles que vous louer</h3>
            </div>
        <table class="table table-hover table-sm table-bordered">
            <thead>
                <tr class="table-danger">
                    <th>Address</th>
                    <th>Bailleur</th>
                    <th>Nombre Pieces</th>
                    <th>Garantie</th>
                    <th>Loyer</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($immeubles as $immeuble)
                    <tr>
                        <td><a href="{{ route('immeubles.show', ['id' => $immeuble->id ]) }}">{{ $immeuble->adresse }}</td>
                        <td><a href="{{ route('bailleurs.show', ['id' => $immeuble->bailleur->id])}}">{{ $immeuble->bailleur->name }}</a></td>
                        <td>{{ $immeuble->nombre_pieces }}</</td>
                        <td>{{ $immeuble->montant_garantie }} $</td>
                        <td>{{ $immeuble->montant_loyer }} $</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection