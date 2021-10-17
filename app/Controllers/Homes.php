<?php

namespace App\Controllers;
use App\Models\testmodel;
class Home extends BaseController
{
	public function index()
	{
		return $this->redirectView('visualiserDashbord');
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
		echo base_url().'/Home/'.$pathVue;
		return redirect()->to(base_url().'/Home/'.$pathVue);
	}

	public function visualiserAccueil()
	{
		$this->showPage('Accueil/vue_Accueil');
	}
	public function visualiserDashbord()
	{
		$this->showPage('dashboard/index');
	}
	
}
