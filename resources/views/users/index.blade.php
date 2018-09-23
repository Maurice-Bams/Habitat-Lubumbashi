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
                        <th>Nom</th>
                        <th>Genre</th>
                        <th>Profession</th>
                        <th>Type de compte</th>
                        <th>Options</th>
            		</tr>
            	</thead>
            	<tbody class="text-sm">
                    @if(count($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->genre }}</td>
                                <td>{{ $user->profession }}</td>
                                <td>{{ $user->type_compte }}</td>
                                <td>
                                    @if($user->admin == "true")
                                        <span class="text-success">Administrateur</span> 
                                    @else
                                        <span class="text-default">Normal</span>
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
            {{ $users->links('vendor.pagination.simple-bootstrap-4') }}
        </div>
    </div>
@endsection