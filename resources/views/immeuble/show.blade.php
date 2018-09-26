@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <table class="table table-hover table-sm table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">{{ $immeuble->adresse }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ville</td>
                            <td>{{ $immeuble->ville }}</td>                        
                        </tr>
                        <tr>
                            <td>Commune</td>
                            <td>{{ $immeuble->commune }}</td>                        
                        </tr>
                        <tr>
                            <td>Quartier</td>
                            <td>{{ $immeuble->quartier }}</td>                        
                        </tr>
                        <tr>
                            <td>Avenue</td>
                            <td>{{ $immeuble->avenue }}</td>                        
                        </tr>
                        <tr>
                            <td>Numero</td>
                            <td>{{ $immeuble->numero }}</td>                        
                        </tr>
                        <tr>
                            <td>Type d'usage</td>
                            <td>{{ $immeuble->type_usage }}</td>                        
                        </tr>
                        <tr>
                            <td>Superficie</td>
                            <td>{{ $immeuble->superficie }}</td>                        
                        </tr>
                        <tr>
                            <td>Nombre Pieces</td>
                            <td>{{ $immeuble->nombre_pieces }}</td>                        
                        </tr>
                        <tr>
                            <td>Montant garantie</td>
                            <td>{{ $immeuble->montant_garantie }}</td>                        
                        </tr>
                        <tr>
                            <td>Montant loyer</td>
                            <td>{{ $immeuble->montant_loyer }}</td>                        
                        </tr>
                        <tr>
                            <td>Etat</td>
                            <td>
                                    @if($immeuble->verified == "1")
                                        <span class="text-success fa fa-check-circle"></span> 
                                        <a href="{{ route('immeubles.unverified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour désactiver la vérification"><span class="badge badge-success">Oui</span></a>
                                    @else
                                        <span class="text-danger fa fa-exclamation-triangle"></span>
                                        <a href="{{ route('immeubles.verified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour vérifier"><span class="badge badge-warning">En attente</span</a>
                                    @endif
                            </td>                        
                        </tr>
                        @if($immeuble->locataire)  
                        <tr>
                            <td>Sous location</td>
                            <td>
                                <span class="badge badge-success">OUI</span> par <strong>{{ $immeuble->locataire->name }}</strong>
                            </td>
                        </tr>
                        @else 
                        <tr>
                            <td>Sous location</td>
                            <td>
                                <span class="badge badge-warning">Non</span>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection