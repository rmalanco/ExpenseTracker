<?php

namespace ExpenseTracker\Controllers;

use ExpenseTracker\Core\BaseController;
use ExpenseTracker\Helpers\Helpers;
use ExpenseTracker\Repositories\HomeRepository;

class HomeController extends BaseController
{
    private $homeRepository;

    // Vistas públicas
    public function __construct()
    {
        Helpers::checkSession();
        $this->homeRepository = new HomeRepository();
    }

    public function index()
    {
        $this->renderPublic('home/index');
    }

    public function login()
    {
        $this->renderPublic('home/login');
    }

    public function register()
    {
        $this->renderPublic('home/register');
    }

    // Metodos de autenticación POST
    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validar credenciales
        $user = $this->homeRepository->getUserByEmail($email);

        if ($user && password_verify($password, $user['Password'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['user_authenticated'] = true;
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_email'] = $user['Email'];

            // Redirigir al dashboard
            header('Location: /dashboard');
            exit();
        } else {
            // Redirigir de vuelta al login con un mensaje de error
            header('Location: /home/login?error=invalid_credentials');
            exit();
        }
    }

    public function registerUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validar si el usuario ya existe
        $user = $this->homeRepository->getUserByEmail($email);

        if ($user) {
            header('Location: /home/register?error=user_exists');
            exit();
        }

        // Crear el usuario
        $this->homeRepository->createUser($email, $password);

        // Redirigir al login
        header('Location: /home/login');
        exit();
    }
}