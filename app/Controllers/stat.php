<?php
namespace App\Controllers;

use App\Models\agentmodel;

class stat extends BaseController
{
    public function showPage($page = "connexion")
    {
        echo  view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
    }	
    public function listeagent() {

	    $agent = new agentmodel();
	    $data['agents'] = $agent->OrderBy('id', 'ASC')->findAll();
	    echo view('templates/header');
	    return view('pages/statistiqueview', $data);
       
        echo view('templates/footer');
        
    }
    public function compter() {
       $agent = new agentmodel();
       $data['agents'] = $agent->findAll();
       $total =0;
       foreach($data as $v ){
           $total+= count($v);
           echo sizeof($v);
       }
    }
        //var_dump (count($data));
    public function AgentM() {
        $agent = new agentmodel();
        $data['agents'] = $agent->where('sexe', 'Masculin')->findAll();
        $tot =0;
        foreach($data as $a ){
            $tot+= count($a);
            echo sizeof($a);
            $e['agents']=$a;
        }
    }
    public function AgentF() {
        $agent = new agentmodel();
        $data['agents'] = $agent->where('sexe', 'Feminin')->findAll();
        $tot =0;
        foreach($data as $a ){
            $tot+= count($a);
            echo sizeof($a);
         
        }
        view ('pages/statistiqueview',$data);
    }
   
}