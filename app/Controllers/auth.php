<?php

namespace App\Controllers;

use App\models\adminmodel;

class auth extends BaseController {

    public function index()
    {
        helper(['form']);
       // echo view('pages/Accueil');
    }



   
    public function connecter()
    {
        //echo "bonjour";
        

        $session = session();
        $admin = new adminmodel();
      
        $nm = $this->request->getVar('nm');
        //var_dump($nm);
        //die();
        $mdp = $this->request->getVar('mdp');
        $data = $admin->where('nom', $nm)->first();
       // var_dump($data);
       // die();
        
        if($data){
            $pass = $data['motdepasse'];
    
           //var_dump($pass);
             // die();
           
            $verify_pass = password_verify($mdp, $pass);
             //var_dump($mdp);
             //die();
           
           if($mdp == $pass){
              // var_dump($verify_pass);
                 //die();
                
                $ses_data = [
                    
                    'nom'       => $data['nom'],
                    'motdepasse'     => $data['motdepasse'],  
                    
                ];
                
                $session->set($ses_data);
                return redirect()->to(base_url('/dashController/index'))->with('message','connexion reussie');;
           
            }
                else{
                $session->setFlashdata('msg', 'mot de passe  ou nom incorrect!!!');
                return redirect()->to('/Home/showPage');
             }
        
        }
           else{
           $session->setFlashdata('msg', 'nom  ou mot de passe incorrect!!!');
           return redirect()->to('/Home/showpage');
        }
    }
    public function deconnect()
	{
		session()->destroy();
		return redirect()->to('/stat/showPage');
        $session->setFlashdata('msg', 'deconnexion reussie');
	}
    
}
      



   
  