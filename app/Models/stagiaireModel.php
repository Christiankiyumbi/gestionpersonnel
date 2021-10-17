<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class  stagiaireModel extends Model {
        protected $table = 't_stagiaire';
        protected $primaryKey = 'id';
        protected $allowedFields = ['id', 'nom', 'postnom', 'prenom', 'sexe', 'dateNaissance', 'lieuNassiance', 'numeroTel', 'email', 'adressePhysique', 'typeStagiaire', 'service', 'domaineEtude', 'etablissement', 'dateDebut', 'dateFin', 'idAgent' ];
        protected $useTimestamps = true;
        protected $createdField = '';
        protected $updatedField = '';
    }   