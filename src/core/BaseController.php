<?php

// BaseController.php

namespace ExpenseTracker\Core;

use ExpenseTracker\Config\View;
use ExpenseTracker\Interfaces\IBaseController;

class BaseController implements IBaseController
{
    protected $title;

    public function render($view, $data = [])
    {
        View::render($view, $data);
    }

    public function renderPublic($view, $data = [])
    {
        $this->layoutHeaderPublic();
        View::render($view, $data);
        $this->layoutFooterPublic();
    }

    public function renderUsers($view, $data = [])
    {
        $this->layoutHeaderUsers();
        View::render($view, $data);
        $this->layoutFooterUsers();
    }

    // layoutHeader Principal de la aplicación
    public function layoutHeaderUsers()
    {
        View::render('layout/header', ['title' => $this->title]);
    }

    // layoutFooter Principal de la aplicación
    public function layoutFooterUsers()
    {
        View::render('layout/footer');
    }

    // layoutHeader Public este layout es para las vistas públicas
    public function layoutHeaderPublic()
    {
        View::render('layout/header-public', ['title' => $this->title]);
    }

    // layoutFooter Public este layout es para las vistas públicas
    public function layoutFooterPublic()
    {
        View::render('layout/footer-public');
    }
}