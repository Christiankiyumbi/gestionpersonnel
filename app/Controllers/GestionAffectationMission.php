<?php


namespace App\Controllers;
use App\Models\modelagent;
use App\Models\modelmission;
$session = \Config\Services::session();

class GestionAffectationMission extends BaseController
{
    public function index()
    {
        //echo base_url().'/affectationMission/visualisationAffectationMission';
        $this->redirectView('visualisationAffectationMission');
        //echo view('affectationMission/vue_formulaire_agent');
    }
	public function showPage($page)
	{
		echo view('templates/header');
		echo view($page);
		echo view('templates/footer');
	}
	public function showPage_($page, $data)
	{
		echo view('templates/header');
		echo view($page,$data);
		echo view('templates/footer');
	}
    public function redirectView($pathVue)
    {
        echo base_url().'/GestionAffectationMission/'.$pathVue;
        return redirect()->to(base_url().'/GestionAffectationMission/'.$pathVue);
    }
    public function visualisationAffectationMission()
    {
        $mission = new modelmission();
        $data['missions'] = $mission->findAll();
        //$data['agents'] = $agent->join('t_agent','t_agent.id = t_mission.idAgent')->findAll();
        $agent = new modelagent();
        $data['agents'] = $agent->findAll();
        $this->showPage_('affectationMission\vue_affectation_mission', $data);
    }
    
    public function voirMission($idMission){
        /**/$sess = session();
        $sess->set('idMission',$idMission);
        //var_dump($data);
        return $this->redirectView('visualiserMission');
    }

    public function visualiserMission()
    {
        $sess = session();
        $mission = new modelmission();
        $agent = new modelagent();
        $agent->select('nom, postnom, prenom');
        //var_dump($sess->idMission);
        $data['missions'] = $mission->where('id',$sess->idMission)->findAll();
        $data['agent'] = $agent->where('id',$data['missions'][0]['idAgent']);
        var_dump($data['missions'][0]['idAgent']);
        
        var_dump($data['agent']->findAll());
        $this->showPage_('affectationMission/vue_mission_affectee',$data);
    }
}