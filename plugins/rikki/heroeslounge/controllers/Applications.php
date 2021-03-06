<?php namespace Rikki\Heroeslounge\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Applications extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    public $requiredPermissions = ['rikki.heroeslounge.applications'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Rikki.Heroeslounge', 'manage-teams', 'team-apps');
    }
}
