<?php

namespace App\Controllers;


use App\Models\AjoutEleve;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    

    public function ajout_eleve()
    {
        
        $prenom = $this->request->getVar('prenom'); 
        $nom = $this->request->getVar('utilisateur');
        $email = $this->request->getVar('email');
        $cni = $this->request->getVar('cni'); 
        $formation_id = $this->request->getVar('formation_id');
        $ajout_eleve = new AjoutEleve();
        
        $donnees = ['prenom' => $prenom, 'nom' => $nom,'email' => $email,'cni' => $cni, 'formation_id' => $formation_id];
        if($id=$ajout_eleve->insert($donnees)){
            return redirect()->to(site_url('ecole'));
        }

    }

    public function liste_eleve(){

        $liste_eleve= new AjoutEleve();
        $donnees['eleve']= $liste_eleve->findAll();
        //var_dump($donnees['eleve']);
        //return view('essai');
        return view('ecole', $donnees);
    }

    public function supprimer_eleve($id=null){

        if($id){
            $supprimer_eleve= new AjoutEleve();
            if($supprimer_eleve-> delete($id)){
                return redirect()->to(site_url('ecole'));
            }
        }
       
    }

    public function modifier_eleve(){
        $id = $this->request->getGet('id'); // Récupérer l'ID depuis l'URL

        if($id){
            $prenom = $this->request->getVar('prenom');
        $nom = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $cni = $this->request->getVar('cni'); 
            $modifier_eleve= new AjoutEleve();

            $donnees = ['prenom' => $prenom, 'nom' => $nom,'email' => $email,'cni' => $cni];
            if($id=$modifier_eleve->update($id, $donnees)){
                return redirect()->to(site_url('ecole'));
            }
            
        }
       
    }
}
