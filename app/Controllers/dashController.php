<?php


namespace App\Controllers;
use App\Models\adminmodel;
use App\Controllers\GestionAgent;
use App\Models\modelagent;

class dashController extends BaseController
{
	
	public function index($agent = null)
	{
		
		$agents = new modelagent();
		$data['lesAgents'] = $agents->orderBy('id','ASC')->findAll();
		if($agent != null){
			$data['agent'] = $agent;
			//var_dump($agent);
			//die();
		}
		
		echo view('templates/header');
		echo view('templates/linkDash');
		echo view('pages/dashView',$data);
		//echo view('templates/footerDash');
		echo view('templates/footer');
	}
public function enregistrerAgent(){
	echo view('templates/header');
		echo view('templates/linkDash');
		echo view('pages/'.$page);
		//echo view('templates/footerDash');
		echo view('templates/footer');
}

}
	
