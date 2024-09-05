<?php namespace App\Controllers;

use App\Models\EmployeModel;

class EmployeController extends BaseController
{
    public function index()
    {
        return view('employesajout');
    }

    public function save()
    {
        $model = new EmployeModel();

        $validationRules = [
            'nom' => 'required|alpha_space',
            'prenom' => 'required|alpha_space',
            'dateNaissance' => 'required|valid_date',
            'email' => 'required|valid_email',
            'numeroTelephone' => 'required',
            'poste' => 'required|alpha_space',
            'departement' => 'required|alpha_space',
            'dateEmbauche' => 'required|valid_date',
            'salaire' => 'required|decimal'
        ];

        $data = [
            'Nom' => $this->request->getVar('nom'),
            'Prenom' => $this->request->getVar('prenom'),
            'DateNaissance' => $this->request->getVar('dateNaissance'),
            'Email' => $this->request->getVar('email'),
            'NumeroTelephone' => $this->request->getVar('numeroTelephone'),
            'Poste' => $this->request->getVar('poste'),
            'Departement' => $this->request->getVar('departement'),
            'DateEmbauche' => $this->request->getVar('dateEmbauche'),
            'Salaire' => $this->request->getVar('salaire')
        ];

        $model->save($data);

        return redirect()->to('/employesconsultation');
    }

    public function consultation()
    {
        $model = new EmployeModel();
        $data['employes'] = $model->getAllEmployes();
        return view('employesconsultation', $data);
    }

    public function delete($id)
    {
        $employeModel = new EmployeModel();
        if ($employeModel->deleteEmployee($id)) {
            return redirect()->to('/employesconsultation')->with('message', 'Employé supprimé avec succès.');
        } else {
            return redirect()->to('/employesconsultation')->with('error', 'Erreur lors de la suppression de l\'employé.');
        }
    }
}
