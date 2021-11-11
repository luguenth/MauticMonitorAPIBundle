<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
return [
    'name'        => 'Monitor API',
    'description' => 'Monitor Api',
    'version'     => '1.0',
    'author'      => 'Lukas Guenther',
    'routes' => [
    'api' => [
        'mautic_api_monitor' => [
            'standard_entity' => true,
            'name'            => 'monitor',
            'path'            => '/monitor',
            'controller'      => 'MonitorAPIBundle:Api\Monitor',
        ],
        'mautic_api_monitor_version' => [
            'path'       => '/monitor/all',
            'controller' => 'MonitorAPIBundle:Api\Monitor:getAll',
            'method'     => 'GET',
        ],
    ],
],
];
