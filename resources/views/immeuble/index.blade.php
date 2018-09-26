@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h1>
                Liste d'immeubles
                @guest 
                @else 
                    @if(Auth::user()->role->title == "Bailleur")
                        <a href="{{ route('immeubles.create') }}" class="btn btn-info"><span class="fa fa-plus"><span> Ajouter</a>
                    @endif
                @endguest
                </h1>
            </div>
            <table class="table table-hover table-sm table-bordered">
            	<thead class="thead-dark">
            		<tr>
                        <th>#</th>
                        <th>Adress</th>
                        <th>Bailleur</th>
                        <th>Loyer</th>
                        <th>Garantie</th>
                        <th>Verifié</th>
                        <th>Actions</th>
            		</tr>
            	</thead>
            	<tbody class="text-sm">
                    @if(count($immeubles))
                        @foreach($immeubles as $immeuble)
                            
                            <tr @guest @else @if(Auth::user()->id == $immeuble->user_id) class="table-success" @endif @endif>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $immeuble->adresse }}</td>
                                <td><a href="{{ route('bailleurs.show', ['id' => $immeuble->bailleur->id ])}}"><strong>{{ $immeuble->bailleur->name }}</strong></a></td>
                                <td>{{ $immeuble->montant_loyer }} $</td>
                                <td>{{ $immeuble->montant_garantie }} $</td>
                                <td>
                                    @if($immeuble->verified == \App\Immeuble::VERIFIED_IMMEUBLE)
                                        <span class="text-success fa fa-check-circle"></span> 
                                        <a href="{{ route('immeubles.unverified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour désactiver la vérification"><span class="badge badge-success">Oui</span></a>
                                    @else
                                        <span class="text-danger fa fa-exclamation-triangle"></span>
                                        <a href="{{ route('immeubles.verified', [ 'id' => $immeuble->id ]) }}" data-toggle="tooltip" data-placement="bottom" title="Click pour vérifier"><span class="badge badge-warning">En attente</span</a>
                                    @endif
                                </td>
                                @guest
                                <td>
                                    <a href="{{ route('immeubles.show', ['id' => $immeuble->id ]) }}" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i> Detail</a>
                                </td>
                                @else
                                <td>
                                    @if(($immeuble->verified == \App\Immeuble::VERIFIED_IMMEUBLE && !$immeuble->locataire ) && !Auth::user()->isAdmin() && !Auth::user()->isBailleur())
                                        <a href="{{ route('paiements.louer', ['id' => $immeuble->id ]) }}" class="btn btn-success btn-sm"><i class="fa fa-money"></i> Louer</a>
                                    @endif
                                    <a href="{{ route('immeubles.show', ['id' => $immeuble->id ]) }}" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i> Detail</a>
                                    @if(Auth::user()->isAdmin() || Auth::user()->id == $immeuble->bailleur->id)
                                        <a href="#" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('immeubles.delete', ['id' => $immeuble->id]) }}" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Supprimer
                                            </button>
                                        </form>
                                    @endif
                                </td>
                                @endguest
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