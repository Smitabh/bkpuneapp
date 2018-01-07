<?php namespace Iocare\BkpuneWebservice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Iocare\BkpuneWebservice\Models\Center;

/**
 * Type Back-end Controller
 */
class Type extends Controller
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
        BackendMenu::setContext('Iocare.BkpuneWebservice', 'bkpunewebservice', 'type');
    }


    public function listOverrideColumnValue($record, $columnName, $definition = null)
    {
      if($columnName == 'center_id')
      {
        return Center::find($record -> center_id)['name'];
      }
    }
}