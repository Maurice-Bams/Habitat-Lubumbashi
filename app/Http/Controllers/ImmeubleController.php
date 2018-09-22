<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeubles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Immeuble;
use App\Form\ImmeubleForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class ImmeubleController extends Controller
{
    use FormBuilderTrait;

    public function index()
    {
        $immeubles = Immeuble::where('verified', Immeuble::VERIFIED_IMMEUBLE)->paginate(10);
        return View::make('immeuble.index', compact('immeubles'));
    }

    public function create()
    {
        $form = $this->form(ImmeubleForm::class, [
            'method' => 'POST',
            'route' => 'immeubles.store'
        ]);
        return View::make('immeuble.create', compact('form'));
    }

    public function store(Request $request)
    {
        $form = $this->form(ImmeubleForm::class);
        if(!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }
        $immeuble = Immeuble::create($request->all());
        $request->session()->flash('succsss', 'Votre immeuble a bien été enregistrer.');
        return redirect(route('immeuble.index', $immeuble));

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
