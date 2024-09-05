<?php
// app/Models/ProjetModel.php
namespace App\Models;

use CodeIgniter\Model;

class ProjetModel extends Model
{
    protected $table = 'projets';
    protected $allowedFields = ['nom', 'description', 'budget', 'echeances'];
    
    public function getAllProjets()
    {
        return $this->findAll();
    }

    public function deleteProjectById($id)
    {
        return $this->delete($id);
    }

}