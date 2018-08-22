<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeubles;
use Illuminate\Support\Facades\Auth;

class ImmeublesController extends Controller
{

 	public function submit(Request $request){

 		/*$this->validate($request, [

			'user_id' => 'required',
			'adresse' => 'required',
			'superficie' => 'required',
			'usages' => 'required',
			'pieces' => 'required',
			'douches' => 'required',
			'garantie' => 'required',
			'mois' => 'required',
			'description'   => 'required'
 		]);*/

 		//création d'un nouvel immeuble
 		return "SUCCES";

	 	/*$Immeubles = new Immeubles;
	    $Immeubles->user_id = $cur_us;
	    $Immeubles->adresse = $request->input('adresse');
	    $Immeubles->usages = $request->input('usages');
	    $Immeubles->superficie = $request->input('superficie');
	    $Immeubles->pieces = $request->input('pieces');
	    $Immeubles->douches = $request->input('douches');
	    $Immeubles->garantie = $request->input('garantie');
	    $Immeubles->loyer = $request->input('loyer');
	    $Immeubles->description = $request->input('description');  
		
		$Immeubles->save();

		//redirect

		return redirect('/');*/
	}	  
}
