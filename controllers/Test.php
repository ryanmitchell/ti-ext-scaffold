<?php

namespace Thoughtco\Scaffold\Controllers;

use AdminMenu;
use Template;

class Test extends \Admin\Classes\AdminController
{
    public function __construct()
    {
        parent::__construct();

        AdminMenu::setContext('sales', 'scaffold');
        Template::setTitle('Test test test');
    }

    public function index()
    {
        // do stuff
    }
}
