<?php

namespace App\Models;
use CodeIgniter\Model;

class modelmission extends Model
{
    protected $table = 't_mission';
    protected $primaryKey = 'id';
    protected $allowedFields = ['codeMission', 'objectifMission', 'lieuMission', 'dateDebut', 'dateFin', 'idAgent'];

}