<?php

namespace Osa\ModuleMaker\Controller;

use Pagekit\Application as App;


class ModuleMakerController
{
    /**
     * @Access(admin=true)
     */
    public function indexAction()
    {
        $module = App::module('modulemaker');
        $config = $module->config;

        return [
            '$view' => [
                'title' => 'Osa ModuleMaker Management System - OSMS',
                'name' => 'modulemaker:views\admin\modules.php'
            ],
            '$data' => $config,
            'message' => 'Got Questions?',
            'entries' => $config['entries']
        ];
    }

    /**
     * @Request({"entries": "array"}, csrf=true)
     * @Access(admin=true)
     */
    public function saveAction($entries=[])
    {
        //To store the entries, we fetch the config-object for our modulemaker-module
        // We set the entries property to be the entries-array which we
        // receive via a request
        App::config('modulemaker')->set('entries', $entries);

        return ['success' => true];

    }

    /**
     * @Route("/")
     */
    public function siteAction()
    {
        $module = App::module('modulemaker');
        $config = $module->config;

        return [
            '$view' => [
                'title' => 'OSMS',
                'name' => 'modulemaker:views/index.php'
            ],

            'entries' => $config['entries']
        ];
    }


}

?>
