<?php


namespace App\Controllers;
use App\Models\modelagent;
$session = \Config\Services::session();

class GestionAgent extends BaseController
{
    protected $session;
    protected $sessionAgent = "sessionAgent";
    public function index()

    {
        echo "Gestionnaire Agent";
        //$this->listerAgent();
    }
    public function inde()
	{
		
			//var_dump($agent);
			//die();
		echo view('templates/header');
		echo view('templates/linkDash');
		echo view('pages/dashView',$data);
		//echo view('templates/footerDash');
		echo view('templates/footer');
	}
	public function showPage($page)
	{
		echo view('templates/header');
        echo "<br/>";
		echo view($page);
		echo view('templates/footer');
	}
	public function showPage_($page, $data)
	{
		echo view('templates/header');
        echo "<br/>";
		echo view($page,$data);
		echo view('templates/footer');
	}
    // CRUD
    public function listerAgent()
    {
        $agents = new modelagent();
        $data['lesAgents'] = $agents->findAll();
        $this->destroySessionAgent($this->sessionAgent);
        //var_dump($data);
        $this->showPage_('gestionAgent\vue_accueille',$data);
    }
    public function ajouterAgent()
    {
        //return view('gestionAgent\vue_formulaire_agent');
        $this->showPage('gestionAgent\agentform');
    }
    public function enregistrerAgent()
    {
        $_session =  session();
		$_agent = new modelagent();
        $this->destroySessionAgent($this->sessionAgent);
		$data = [
            'matricule' => $this->request->getPost('inputmatricule'),
            'photo' => $this->request->getPost('inputProfile'),
            'nom' => $this->request->getPost('inputNom'),
            'postnom' => $this->request->getPost('inputPostNom'),
            'prenom' => $this->request->getPost('inputPrenom'), 
            'sexe' => $this->request->getPost('selecetedSexe'), 
            'dateNaissance' => $this->request->getPost('inputDateNaiss'), 
            'lieuNaissance' => $this->request->getPost('inputLieuNaiss'), 
            'situationMatrimoniale' => $this->request->getPost('selecetedSitMatrimoniale'), 
            'nbEnfant' => $this->request->getPost('inputNombreEnfant'), 
            'numTel' => $this->request->getPost('inputnumTel'), 
            'email' => $this->request->getPost('inputemail'), 
            'ville'=> $this->request->getPost('selecetedVille'), 
            'commune' => $this->request->getPost('selecetedCommune'), 
            'adressePhysique' => $this->request->getPost('inputadressePhyique'), 
            'dateEmbauche' => $this->request->getPost('inputdateEmbauche'), 
            'gradeStatut' => $this->request->getPost('selectedGradeStatut'), 
            'service' => $this->request->getPost('selectedService'), 
            'mecanisation' => $this->request->getPost('selectedMecanisé'), 
            'dernierDiplome' => $this->request->getPost('inputdernierDiplome'), 
            'anneeObtention' => $this->request->getPost('inputAnneeobtention'), 
            'domaineEtude' => $this->request->getPost('inputdomaineEtude'), 
            'etablissement' => $this->request->getPost('inputEtablissement')
        ];

        $rep = $_agent->insert($data);
        //var_dump($this->request->getPost('selectedMecanisé'));
        //var_dump($data);
        if( $rep > 0)
        {
            return redirect()->to(base_url().'/GestionAgent/listerAgent');
        }else{
            echo "Enregistrement échoué ! <br>";
            echo "Voulez-vous réesayer ? <br>";
            ?>
            <a href="<?=base_url().'/GestionAgent/ajouterAgent';?>">Retournez vers la page ajouter agent !</a>
            <a href="<?=base_url().'/GestionAgent/listerAgent';?>">Retournez vers l'acceuil !</a>
            <?php
        }/**/
        return null;
    }
    public function modifierAgent($id)
    {
        $m_agent = new modelagent();
        $data_agent = $m_agent->Where(['id' => $id],1,false)->orderBy('id','ASC')->first();
        $this->createSessionAgent($data_agent);
        //$this->showPage('gestionAgent\vue_formulaire_agent');
        return redirect()->to(base_url().'/GestionAgent/visualisationFormulaireModification');
    }

    public function createSessionAgent($dataAgent)
    {
        $sess = session();
        $sess->set($this->sessionAgent,$dataAgent);
    }

    public function miseAjourInfosAgentInDataBase($id){
        //var_dump($sess->nom);
        $this->destroySessionAgent($this->sessionAgent);
        $m_agent = new modelagent();
        $data = [
            'matricule' => $this->request->getPost('inputmatricule'),
            'photo' => $this->request->getPost('inputProfile'),
            'nom' => $this->request->getPost('inputNom'),
            'postnom' => $this->request->getPost('inputPostNom'),
            'prenom' => $this->request->getPost('inputPrenom'), 
            'sexe' => $this->request->getPost('selecetedSexe'), 
            'dateNaissance' => $this->request->getPost('inputDateNaiss'), 
            'lieuNaissance' => $this->request->getPost('inputLieuNaiss'), 
            'situationMatrimoniale' => $this->request->getPost('selecetedSitMatrimoniale'), 
            'nbEnfant' => $this->request->getPost('inputNombreEnfant'), 
            'numTel' => $this->request->getPost('inputnumTel'), 
            'email' => $this->request->getPost('inputemail'), 
            'ville'=> $this->request->getPost('selecetedVille'), 
            'commune' => $this->request->getPost('selecetedCommune'), 
            'adressePhysique' => $this->request->getPost('inputadressePhyique'), 
            'dateEmbauche' => $this->request->getPost('inputdateEmbauche'), 
            'gradeStatut' => $this->request->getPost('selectedGradeStatut'), 
            'service' => $this->request->getPost('selectedService'), 
            'mecanisation' => $this->request->getPost('selectedMecanisé'), 
            'dernierDiplome' => $this->request->getPost('inputdernierDiplome'), 
            'anneeObtention' => $this->request->getPost('inputAnneeobtention'), 
            'domaineEtude' => $this->request->getPost('inputdomaineEtude'), 
            'etablissement' => $this->request->getPost('inputEtablissement')
        ];
        //var_dump($data);
        //$m_agent->set('id'=>$id)
        $rep = $m_agent->replace($data);
        if( $rep != null)
        {
            return redirect()->to(base_url().'/GestionAgent/listerAgent');
        }else{
            echo "Modification échouée ! <br>";
            ?>
            <a href="<?=base_url().'/GestionAgent/listerAgent';?>">Retournez vers l'acceuil !</a>
            <?php
        }/**/
    }

    public function destroySessionAgent($sessionName)
    {
        $sess = session();
        if(isset($sess->sessionAgent))
        {
            $sess->remove($sessionName);
        }
    }

    public function voirDetailAgent($id)
    {
        $m_agent = new modelagent();
        $data_agent = $m_agent->Where(['id' => $id],1,false)->orderBy('id','ASC')->first();
        $this->createSessionAgent($data_agent);
		//$this->visualisationDetailAgent();
        return redirect()->to(base_url().'/GestionAgent/visualisationDetailAgent');
    }

    public function visualisationDetailAgent()
    {
        $this->showPage('gestionAgent/vue_detail_agent');
    }
    public function visualisationFormulaireModification()
    {
        $this->showPage('gestionAgent\vue_formulaire_agent');
    }
}