<?php

/**
 * Description of module
 * 
 * PHP version 7
 * 
 * * * License * * * 
 * Copyright (C) 2022 PORTOSPIRE, All Rights Reserved.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 * * * End License * * * 
 * 
 * @category  Config
 * @package   PSFrameworkClient
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   GIT: $ID$
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 */

use PortoSpire\PortoSpireSitesAPIClient\Service\PortoSireSitesAPIClient;
use PortoSpire\PortoSpireSitesAPIClient\Service\PortoSpireSitesAPIClientFactory;

/*
 * Returns module configuration for Laminas Expressive and Laminas MVC
 */
return [
    'service_manager' => [
        'factories' => [
            PortoSireSitesAPIClient::class => PortoSpireSitesAPIClientFactory::class,
        ]
    ],
    'notification_manager' => [
        'notification_types' => [
            'product' => [
                'class' => '',
                'children' => [
                    'page:saved',
                    'pageblast:saved',
                    'form:submitted',
                    'error',
                    'info',
                    'notice',
                    'alert'
                ]
            ],
            'security' => [
                'class' => '',
                'children' => [
                    'newdevice',
                    'invalidlogin'
                ]
            ],
            'service' => [
                'class' => '',
                'children' => [
                    'maintenance',
                    'outage',
                    'issue'
                ]
            ],
            'activity' => [
                'class' => '',
                'children' => [
                    'usage:weekly',
                    'usage:monthly',
                    'usage:daily'
                ]
            ],
            'billing' => [
                'class' => '',
                'children' => [
                    'invoice:due',
                    'payment:complete',
                    'payment:error',
                    'updated',
                    'quote:prepared'
                ]
            ],
            'calendar' => [
                'class' => '',
                'children' => [
                    'event:updated',
                    'eventtype:updated',
                    'location:updated',
                    'recurring:updated'
                ]
            ]
        ],
    ]
];
