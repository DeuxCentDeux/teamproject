<?php

namespace App\Controllers;

// Importation du modèle EmployeModel pour interagir avec la base de données des employés.
use App\Models\EmployeModel;
// Importation de la classe de base Controller pour l'héritage.
use CodeIgniter\Controller;

// Définition de la classe EmployeConsultation qui étend le contrôleur de base de CodeIgniter.
class EmployeConsultation extends Controller
{
    // Méthode pour afficher tous les employés.
    public function index()
    {
        // Instanciation du modèle EmployeModel pour accéder aux données des employés.
        $employeModel = new EmployeModel();
        // Récupération de tous les employés à partir du modèle et passage des données à la vue.
        $data['employes'] = $employeModel->getAllEmployes();

        // Appel de la vue 'employesconsultation' en lui passant les données des employés.
        return view('employesconsultation', $data);
    }
}
