<?php namespace Iocare\BkpuneWebservice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Prop Back-end Controller
 */
class Article extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['iocare.bkpunewebservice.access_article'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Iocare.BkpuneWebservice', 'bkpunewebservice', 'article');
    }

}