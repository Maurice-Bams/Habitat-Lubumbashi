@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h1>Liste d'immeubles 
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
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Profession</th>
                        <th>Role</th>
                        <th>Options</th>
            		</tr>
            	</thead>
            	<tbody class="text-sm">
                    @if(count($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->profession }}</td>
                                <td>{{ $user->role->title }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-info-circle"></i> Details</a>
                                    @guest
                                    @else 
                                        @if(Auth::user()->isAdmin())
                                        <a href="#" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="#" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        @endif
                                    @endguest
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