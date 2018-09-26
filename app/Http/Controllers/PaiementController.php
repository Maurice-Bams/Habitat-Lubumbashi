<?php

namespace App\Http\Controllers;

use App\Immeuble;
use Illuminate\Support\Facades\{Auth, View};

class PaiementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function louer($id) 
    {
        $immeuble = Immeuble::findOrFail($id);
        $immeuble->update(['user_id' => Auth::user()->id]);
        return redirect(route('immeubles.index'))->with('success', 'Votre action a réussit');
    }

    public function locations()
    {
        $immeubles = Immeuble::where('user_id', Auth::user()->id)->get();
        return View::make('users.locations', compact('immeubles'));
    }
}