<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeModel extends Model
{
    protected $table = 'Employes'; // Nom de la table
    protected $primaryKey = 'EmployeID'; // Clé primaire

    protected $allowedFields = [
        'Nom', 'Prenom', 'DateNaissance', 'Email', 
        'NumeroTelephone', 'Poste', 'Departement', 'DateEmbauche', 'Salaire'
    ];

    public function getAllEmployes()
    {
        return $this->findAll();
    }

    public function deleteEmployee($id)
    {
        return $this->delete($id);
    }
}
