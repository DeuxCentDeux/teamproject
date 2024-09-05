<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;


class Auth extends BaseController 
{
    public function register()
    {
        $userModel = new UserModel();
    
        if ($this->request->getMethod() === 'post') {
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password')
            ];
    
            $userModel->save($data);
            return redirect()->to('login');
            } else {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            if ($username && $password) {
                $data = [
                    'username' => $username,
                    'password' => $password
                ];
                $userModel->save($data);

                $userM = new UserModel();
                $user = $userM->where('username', $username)->first();
                
                if ($user) {
                    return $this->getResponse(['message' => 'Inscription validé']);
                } else {
                    return $this->getResponse(['message' => 'Erreur lors de l\'inscription']);
                }
 
            }
        
            return view('register');
        }
    }

    public function login()
    {
        $userModel = new UserModel();
    
        // Traitement pour les requêtes GET uniquement, conformément à votre consigne
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        if ($username && $password) {
            $user = $userModel->where('username', $username)->first();
    
            if ($user && $password == $user['password']) {
                $this->setUserSession($user); // Assurez-vous que cette méthode initialise correctement la session de l'utilisateur
                return redirect()->to(''); // Redirection vers la page d'accueil ou tableau de bord
            } else {
                // Utilisation de getResponse pour la cohérence, bien que non montré dans le code initial
                return $this->getResponse(['message' => 'Erreur d\'authentification']);
                // Affichage d'une alerte JavaScript pour l'erreur d'authentification
                echo "<script>alert('Erreur dans le mot de passe ou utilisateur');</script>";
            }
        } else {
            // Affichage de la vue de connexion si les paramètres ne sont pas présents
            return view('login');
        }
    }
    

    private function setUserSession($user) {
        $session = session();
        $session->set('isLoggedIn', true);
    }
    
    public function logout() {
        $session = session();
        $session->remove('isLoggedIn');
        return redirect()->to('');
    }
}