<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\dao\ServiceFrais;
use Exception;

class FraisController extends Controller
{
    public function getFraisVisiteur(){
        $erreur="";
        try {
            $id = Session::get('id');
            $serviceFrais =new ServiceFrais();
            $mesFrais =$serviceFrais->getFrais($id); ;
            return view( 'vues/listeFrais', compact('mesFrais'));
        }catch (Exception $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        }
    }

    public function updateFrais($id_frais)
    {
        $erreur = "";
        try {
            $serviceFrais =new ServiceFrais();
            $unFrais =$serviceFrais->getById($id_frais);
            $titreVue = "Modification d'un fiche de frais";
            return view('vues/modifierFrais', compact('unFrais' , 'titreVue'));
        }catch (Exception $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        }
    }

    public function validerFrais(Request $request, $id_frais)
}
