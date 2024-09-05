<?php
// app/Controllers/ProjetController.php
// Déclaration de l'espace de noms pour ce contrôleur, permettant son utilisation dans l'application.
namespace App\Controllers;

// Importation du modèle ProjetModel pour interagir avec la base de données des projets.
use App\Models\ProjetModel;
// Importation de la classe de base Controller pour l'héritage.
use CodeIgniter\Controller;

// Définition de la classe ProjetController qui étend le contrôleur de base de CodeIgniter.
class ProjetController extends Controller
{
    // Méthode pour afficher tous les projets.
    public function index()
    {
        // Instanciation du modèle ProjetModel pour accéder aux données des projets.
        $projetModel = new ProjetModel();
        // Récupération de tous les projets à partir du modèle et passage des données à la vue.
        $data['projets'] = $projetModel->getAllProjets();
        // Appel de la vue 'projetconsultation' en lui passant les données des projets.
        return view('projetconsultation', $data);
    }

    // Méthode pour afficher la page d'ajout de projet.
    public function index2() {
        // Appel de la vue 'projetajout' pour afficher le formulaire d'ajout.
        return view('projetajout');
    }

    // Méthode pour sauvegarder un nouveau projet dans la base de données.
    public function save()
    {
        // Instanciation du modèle ProjetModel.
        $projetModel = new ProjetModel();
    
        // Récupération des données des échéances à partir de la requête HTTP.
        $nomsEcheances = $this->request->getVar('nomsEcheances');
        $datesEcheances = $this->request->getVar('datesEcheances');
    
        // Préparation des données d'échéances pour sauvegarde.
        $echeances = [];
        foreach ($nomsEcheances as $key => $nom) {
            $echeances[] = ['nom' => $nom, 'date' => $datesEcheances[$key]];
        }
    
        // Préparation de l'ensemble des données du projet pour sauvegarde.
        $data = [
            'nom' => $this->request->getVar('nomProjet'),
            'description' => $this->request->getVar('descriptionProjet'),
            'budget' => $this->request->getPost('budgetProjet'),
            'echeances' => json_encode($echeances),
        ];
    
        // Sauvegarde des données du projet dans la base de données.
        $projetModel->save($data);
    
        // Redirection de l'utilisateur vers la page de consultation des projets.
        return redirect()->to('/projetconsultation');
    }

    public function delete($id)
    {
        $projetModel = new ProjetModel();
        if ($projetModel->deleteProjectById($id)) {
            return redirect()->to('/projetconsultation')->with('message', 'Projet supprimé avec succès.');
        } else {
            return redirect()->to('/projetconsultation')->with('error', 'Erreur lors de la suppression du projet.');
        }
    }

    // Les méthodes pour éditer et mettre à jour un projet sont commentées et non utilisées actuellement.
}
