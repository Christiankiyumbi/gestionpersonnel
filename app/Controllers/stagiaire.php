<?php

namespace App\Controllers;

use App\Models\stagiaireModel;

class stagiaire extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
    public function test(){
        echo "bonjour tout le monde";
    }
    /**
     * creation du stagiaire
     */
    public function createStagiaire(){
        $agent = new stagiaireModel();
        $data['agent'] = $agent->orderBy('id','ASC')->findAll();
        echo view("templates/header");
        return view("pages/formStagiaire",$data);
        echo view("templates/footer");
    }
    public function Modification($id = null){
        $stagiaire = new stagiaireModel();
		$data['stagiaireObj'] = $stagiaire->where('id',$id)->first();
		$dataHeader = ['pageTitle' => 'Gestion du personnel - Modification du Stagiaire',
            'validation' =>\config\Services::validation()];

        echo view('templates/header',$dataHeader);
        return view('pages/formUpdateStaiaire',$data);
        echo view('templates/footer');
    }
    /**
     * enregistrement de stagiaire
     */

    public function save(){

        $stagiaireModel = new stagiaireModel();

        $data = [
            'nom'=> $this->request->getPost('inputNom'),
            'postnom'=> $this->request->getPost('inputPostNom'),
            'prenom'=> $this->request->getPost('inputPrenom'),
            'sexe'=> $this->request->getPost('inputType'),
            'dateNaissance'=> $this->request->getPost('inputDateNaiss'),
            'lieuNassiance'=> $this->request->getPost('inputLieuNaisss'),
            'numeroTel'=> $this->request->getPost('inputTel'),
            'email'=> $this->request->getPost('inputEmail'), 
            'adressePhysique'=> $this->request->getPost('inputadressePhyique'), 
            'typeStagiaire'=> $this->request->getPost('inputTypeStagiaire'), 
            'service'=> $this->request->getPost('inputService'), 
            'domaineEtude'=> $this->request->getPost('inputDomaineEtude'), 
            'etablissement'=> $this->request->getPost('inputEtablissement'), 
            'dateDebut'=> $this->request->getPost('inputDatedebut'), 
            'dateFin'=> $this->request->getPost('inputDatefin'), 
            'idAgent'=> $this->request->getPost('inputidAgent')
        ];
        
        $stagiaireModel->insert($data);
        echo "l'enregistrement avec success";
    }
    /**
     * archiver le stagiaire
     */
    public function delete($id=null){
        $stagiaire = new stagiaireModel();
		$data['personneObj'] = $stagiaire->where('id',$id)->first();
		$dataHeader = ['pageTitle' => '',
            'validation' =>\config\Services::validation()
		];
		$stagiaire->delete($id);
		return redirect()->to(site_url('stagiaire/listeStagiaire'))->with('message','Stagiaire supprime avec succes');
        
    }
    /**
     * afficher le stagiaire
     */
    public function listeStagiaire(){
        $stagiaire = new stagiaireModel();
        //$Agent = new AgentModel();
        $data['stagiaire'] = $stagiaire->orderBy('id','ASC')->findAll();
        //$data['Agents'] = $Agent->orderBuy('id','ASC')->findAll();

        echo view("templates/header");
        return view("pages/listeStagiaire",$data);
        echo view("templates/footer");
    }
    public function updateStagiaire($id= null){
        //instruction
        $stagiaireModel = new stagiaireModel();
        
       
        
        $data = [
            'nom'=> $this->request->getPost('inputNom'),
            'postnom'=> $this->request->getPost('inputPostNom'),
            'prenom'=> $this->request->getPost('inputPrenom'),
            'sexe'=> $this->request->getPost('inputType'),
            'dateNaissance'=> $this->request->getPost('inputDateNaiss'),
            'lieuNassiance'=> $this->request->getPost('inputLieuNaisss'),
            'numeroTel'=> $this->request->getPost('inputTel'),
            'email'=> $this->request->getPost('inputEmail'), 
            'adressePhysique'=> $this->request->getPost('inputadressePhyique'), 
            'typeStagiaire'=> $this->request->getPost('inputTypeStagiaire'), 
            'service'=> $this->request->getPost('inputService'), 
            'domaineEtude'=> $this->request->getPost('inputDomaineEtude'), 
            'etablissement'=> $this->request->getPost('inputEtablissement'), 
            'dateDebut'=> $this->request->getPost('inputDatedebut'), 
            'dateFin'=> $this->request->getPost('inputDatefin'), 
            'idAgent'=> $this->request->getPost('inputidAgent')
        ];
        $stagiaireModel->update($id,$data);
		return redirect()->to(site_url('personne/listerPersonne'))->with('message','stagiaire Modifie avec succes');
    }


}
