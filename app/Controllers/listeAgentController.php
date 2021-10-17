<?php


namespace App\Controllers;


class listeAgentController extends BaseController
{
	
	public function index($page ='listeAgentView')
	{
		echo view('templates/headerList');
        //echo view('templates/l');
		echo base_url();
		echo view('pages/'.$page);
		echo view('templates/footerList');
	}
	public function test(){
		echo view('pages/modal');
		
        
	}

}
	
