<?php namespace Iocare\BkpuneWebservice;

use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * BkpuneWebservice Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'BkpuneWebservice',
            'description' => 'The online Bkpune App Webservice',
            'author'      => 'Rajendra, Smita',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'mediscan' => [
                'label'       => 'Centers',
                'url'         => Backend::url('Iocare/bkpunewebservice/centers'),
                'icon'        => 'icon-home',
                'permissions' => ['iocare.bkpunewebservice.*'],
                'order'       => 500,
                'sideMenu' => [
                  'centers' => [
                      'label'       => 'Centers',
                      'icon'        => 'icon-home',
                      'url'         => Backend::url('Iocare/bkpunewebservice/centers'),
                      'permissions' => ['iocare.bkpunewebservice.centers'],
                  ],
                  'article' => [
                      'label'       => 'Article',
                      'icon'        => 'icon-clipboard',
                      'url'         => Backend::url('Iocare/bkpunewebservice/article'),
                      'permissions' => ['iocare.bkpunewebservice.article'],
                  ],
                  'addtype' => [
                      'label'       => 'Center Type',
                      'icon'        => 'icon-list-alt',
                      'url'         => Backend::url('Iocare/bkpunewebservice/centertype'),
                      'permissions' => ['iocare.bkpunewebservice.centertype'],
                  ],
                ]
            ]
        ];
    }

}
