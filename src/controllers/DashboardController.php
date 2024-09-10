<?php

namespace ExpenseTracker\Controllers;

use ExpenseTracker\Core\BaseController;
use ExpenseTracker\Helpers\Helpers;
use ExpenseTracker\Repositories\DashboardRepository;

class DashboardController extends BaseController
{
    private $dashboardRepository;

    public function __construct()
    {
        Helpers::checkSessionAuth();
        $this->dashboardRepository = new DashboardRepository();
    }

    public function index()
    {
        $this->title = 'Dashboard';
        $this->renderUsers('dashboard/index');
    }

    public function logout()
    {
        Helpers::logout();
    }
}