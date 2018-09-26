@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3>
                @guest 
                    Liste d'immeuble de <a href="{{ route('bailleurs.show', ['id' => $bailleur->id ])}}">{{ $bailleur->name }}</a>
                @else 
                    @if(Auth::user() !== $bailleur)
                        <a href="{{ route('immeubles.create') }}" class="btn btn-info"><span class="fa fa-plus"><span> Ajouter</a>
                    @else 
                        Liste d'immeuble de vos immeuble
                    @endif
                @endguest
                </h3>
            </div>
            <table class="table table-hover table-sm table-bordered">
                <thead class="thead-danger">
                    <tr>
                        <th>Address</th>
                        <th>Etat</th>
                        <th>Garantie</th>
                        <th><span class="badge badge-info">20%</span> Impôt sur Garantie</th>
                        <th>Loyer</th>
                        <th><span class="badge badge-info">15%</span> Impôt sur Loyer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bailleur->immeubles as $immeuble)
                        <tr>
                            <td><a href="{{ route('immeubles.show', ['id' => $immeuble->id ])}}">{{ $immeuble->adresse }}</a></td>
                            <td>
                                @if($immeuble->user_id !== null)
                                    <span class="badge badge-success">Loué</span>
                                @else
                                    <span class="badge badge-info">Libre</span>
                                @endif
                            </td>
                            <td>{{ $immeuble->montant_garantie }} $</td>
                            <td>{{ $immeuble->impot_garantie }} $</</td>
                            <td>{{ $immeuble->montant_loyer }} $</td>
                            <td>{{ $immeuble->impot_loyer }} $</</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection