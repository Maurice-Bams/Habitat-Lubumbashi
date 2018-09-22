@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-11">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                               <p class="text-right"><button type="button" class="btn btn-default"><a href="{{ url('/home') }}">Tableau de bord</a></button></p>

                            @endif
                        </div>
                    @endif
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="flex-center">
                    <div class="col-md-4">
                        <p>Immeuble1</p>
                    </div>
                    <div class="col-md-4">
                        <p>Immeuble1</p>
                    </div>
                    <div class="col-md-4">
                        <p>Immeuble1</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
@stop