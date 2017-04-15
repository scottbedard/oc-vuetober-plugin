<?php namespace Author\Plugin\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Things Back-end Controller
 */
class Things extends Controller
{
    public $formConfig = 'config_form.yaml';

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $listConfig = 'config_list.yaml';

    public $registerPermissions = [];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Author.Plugin', 'plugin', 'things');
    }
}
