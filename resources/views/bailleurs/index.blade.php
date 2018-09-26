@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
    <div class="page-header">
                <h3>Liste de bailleurs</h3>
            </div>
        <table class="table table-hover table-sm table-bordered">
            <thead>
                <tr class="table-danger">
                    <th>Nom</th>
                    <th>Profession</th>
                    <th>Nombre immeuble</th>
                    <th>Immeuble sous location</td>
                    <th>Addresse</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bailleurs as $bailleur)
                    <tr>
                        <td><a href="{{ route('bailleurs.show', ['id' => $bailleur->id ]) }}">{{ $bailleur->name }}</td>
                        <td>{{ $bailleur->profession }}</td>
                        <td>{{ $bailleur->immeubles->count() }}</</td>
                        <td>{{ $bailleur->numbre_immeuble_louer }}</td>
                        <td>{{ $bailleur->adresse }} $</td>
                        <td>{{ $bailleur->telephone }}</</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection