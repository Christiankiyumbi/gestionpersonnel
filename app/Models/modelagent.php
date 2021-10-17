<?php

namespace App\Models;
use CodeIgniter\Model;

class modelagent extends Model
{
    protected $table = 't_agent';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'matricule', 'photo', 'nom', 'postnom', 'prenom', 'sexe', 
        'dateNaissance', 'lieuNaissance', 'situationMatrimoniale', 'nbEnfant', 
        'numTel', 'email', 'ville', 'commune', 'adressePhysique', 
        'dateEmbauche', 'gradeStatut', 'service', 
        'mecanisation', 'dernierDiplome', 'anneeObtention', 'domaineEtude', 
        'etablissement'
    ];

}