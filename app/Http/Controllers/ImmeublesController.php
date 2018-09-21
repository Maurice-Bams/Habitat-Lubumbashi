<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeubles;
use Illuminate\Support\Facades\Auth;

class ImmeublesController extends Controller
{
    public function immeubles()
    {
        return ('immeubles');
    }


   
    public function show($id)
    {
        return ( DB::select('SELECT * from immeubles') );
    }
    

    
    public function submit(Request $request)
    {
            //vérification des attributs
            $this->validate($request, [

                'ville'=> 'required',
                'commune'=> 'required',
                'quartier'=> 'required',
                'avenue'=> 'required',
                'numero'=> 'required',
                'type_usage'=> 'required',
                'nombre_pieces'=> 'required',
                'superficie'=> 'required',
                'montant_garantie'=> 'required',
                'montant_loyer'=> 'required',
                'image'=> 'required',
                'description'=> 'required'

            ]);
            //création de l'immeuble
            $immeuble = new Immeubles;
            $immeuble->ville = $request->input('ville');
            $immeuble->commune = $request->input ('commune');
            $immeuble->quartier = $request->input('quartier');
            $immeuble->avenue = $request->input('avenue');
            $immeuble->numero = $request->input('numero');
            $immeuble->type_usage = $request->input('type_usage');
            $immeuble->nombre_pieces = $request->input('nombre_pieces');
            $immeuble->superficie = $request->input('superficie');
            $immeuble->montant_garantie = $request->input('montant_garantie');
            $immeuble->montant_loyer = $request->input('montant_loyer');
            $immeuble->image = $request->input('image');
            $immeuble->description = $request->input('description');

            //sauvegarde immeuble
            $immeuble->save();

            //redirection
            return redirect('/confirmationSoumission');
            
    } 
}
