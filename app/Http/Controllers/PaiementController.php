<?
namespace App\Http\Controllers;

class PaiementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function louer($id) {
        $immeuble = Immeuble::findOrFail($id);
        $immeuble->update(['user_id' => Auth::user()->id]);
        return redirect(route('immeubles.index'))->with('success', 'Votre action a réussit');
    }
}