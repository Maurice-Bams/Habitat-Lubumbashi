<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;

class BailleurController extends Controller
{
    public function index()
    {
        $bailleurs = User::has('immeubles')->with('immeubles')->paginate(10);
        return View::make('bailleurs.index', compact('bailleurs'));
    }

    public function show($id){
        $bailleur = User::with('immeubles')->findOrFail($id);
        return View::make('bailleurs.show', compact('bailleur'));
    }
}
