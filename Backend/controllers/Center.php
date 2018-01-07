<?php namespace Iocare\BkpuneWebservice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Center Back-end Controller
 */
class Center extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Iocare.BkpuneWebservice', 'bkpunewebservice', 'center');
    }
}