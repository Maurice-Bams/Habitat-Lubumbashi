<?php
namespace App\Form;

use Kris\LaravelFormBuilder\Form;

class ImmeubleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('ville', 'text', ['label' => 'Ville', 'rules' => 'required|string'])
            ->add('commune', 'text', ['label' => 'Commune', 'rules' => 'required|string'])
            ->add('quartier', 'text', ['label' => 'Quartier', 'rules' => 'required|string'])
            ->add('avenue', 'text', ['label' => 'Avenue', 'rules' => 'required|string'])
            ->add('numero', 'number', ['label' => 'Numero', 'rules' => 'required|numeric'])
            ->add('type_usage', 'text', ['label' => 'Type d\'usage', 'rules' => 'required|string'])
            ->add('nombre_pieces', 'number', ['label' => 'Nombre de pièces', 'rules'=> 'required|numeric'])
            ->add('superficie', 'text', ['label' => 'Superficie', 'rules' => 'required|numeric'])
            ->add('montant_garantie', 'number', ['label' => 'Montant garantie', 'rules'=> 'required|numeric'])
            ->add('montant_loyer', 'number', ['label' => 'Montant loyer', 'rules'=> 'required|numeric'])
            ->add('description', 'textarea', ['label' => 'Description', 'rules' => 'string'])
            // ->add('image', 'text',['label' => 'Image', 'rules' => 'image'])
            ->add('submit', 'submit', ['label' => 'Enregistrer']);
    }
}
