<?php

namespace ExpenseTracker\Interfaces;

interface IBaseController
{
    public function render($view, $data);
}
