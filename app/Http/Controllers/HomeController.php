<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Immeuble;
use App\Form\ImmeubleForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class HomeController extends Controller
{
    use FormBuilderTrait;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = $this->form(ImmeubleForm::class, [
            'method' => 'POST',
            'route' => 'immeubles.store'
        ]);
        $immeubles = Immeuble::where("verified", Immeuble::UNVERIFIED_IMMEUBLE)->paginate(10);
        return View::make('home', compact('immeubles', 'form'));
    }


}
