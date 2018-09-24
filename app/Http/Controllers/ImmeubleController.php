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

    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index()
    {
        $immeubles = Immeuble::paginate(10);
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
    
    public function verified($id)
    {
        $immeuble = Immeuble::findOrFail($id);
        $immeuble->update(['verified' => Immeuble::VERIFIED_IMMEUBLE]);
        return redirect()->back()->with('success', "L'immeuble a bien été marqué vérifier");
    }

    public function unverified($id)
    {
        $immeuble = Immeuble::findOrFail($id);
        $immeuble->update(['verified' => Immeuble::UNVERIFIED_IMMEUBLE]);
        return redirect()->back()->with('success', "L'immeuble a bien été marqué comme non vérifier");
    }

    public function show($id)
    {
        $immeuble = Immeuble::findOrFail($id);
        return View::make('immeuble.show', compact('immeuble'));
    }
}
