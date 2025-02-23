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

use PortoSpire\PortoSpireSitesAPIClient\Service\PortoSpireSitesAPIClient;
use PortoSpire\PortoSpireSitesAPIClient\Service\PortoSpireSitesAPIClientFactory;

/*
 * Returns module configuration for Laminas Expressive and Laminas MVC
 */
return [
    'service_manager' => [
        'factories' => [
        PortoSpireSitesAPIClient::class => PortoSpireSitesAPIClientFactory::class,
        ]
    ],
    'notification_manager' => [
        'notification_types' => [
            'product' => [
                'class' => '',
                'children' => [
                    'page:saved' => \PortoSpire\PortoSpireSitesAPIClient\Model\Product\Page::class,
                    'pageblast:saved' => PortoSpire\PortoSpireSitesAPIClient\Model\Product\Pageblast::class,
                    'form:submitted' => \PortoSpire\PortoSpireSitesAPIClient\Model\Product\Form::class,
                    'error' => PortoSpire\PortoSpireSitesAPIClient\Model\Product\Error::class,
                    'info' => PortoSpire\PortoSpireSitesAPIClient\Model\Product\Info::class,
                    'notice' => \PortoSpire\PortoSpireSitesAPIClient\Model\Product\Notice::class,
                    'alert' => PortoSpire\PortoSpireSitesAPIClient\Model\Product\Alert::class
                ]
            ],
            'security' => [
                'class' => '',
                'children' => [
                    'newdevice' => \PortoSpire\PortoSpireSitesAPIClient\Model\Security\Newdevice::class,
                    'invalidlogin' => \PortoSpire\PortoSpireSitesAPIClient\Model\Security\Invalidlogin::class
                ]
            ],
            'service' => [
                'class' => '',
                'children' => [
                    'maintenance' => \PortoSpire\PortoSpireSitesAPIClient\Model\Service\Maintenance::class,
                    'outage' => PortoSpire\PortoSpireSitesAPIClient\Model\Service\Outage::class,
                    'issue' => PortoSpire\PortoSpireSitesAPIClient\Model\Service\Issue::class
                ]
            ],
            'activity' => [
                'class' => '',
                'children' => [
                    'usage:weekly' => \PortoSpire\PortoSpireSitesAPIClient\Model\Activity\Usage::class,
                    'usage:monthly' => \PortoSpire\PortoSpireSitesAPIClient\Model\Activity\Usage::class,
                    'usage:daily' => \PortoSpire\PortoSpireSitesAPIClient\Model\Activity\Usage::class
                ]
            ],
            'billing' => [
                'class' => '',
                'children' => [
                    'invoice:due' => \PortoSpire\PortoSpireSitesAPIClient\Model\Billing\Invoice::class,
                    'payment:complete' => \PortoSpire\PortoSpireSitesAPIClient\Model\Billing\Payment::class,
                    'payment:error' => \PortoSpire\PortoSpireSitesAPIClient\Model\Billing\Payment::class,
                    'updated' => \PortoSpire\PortoSpireSitesAPIClient\Model\Billing\Updated::class,
                    'quote:prepared' => PortoSpire\PortoSpireSitesAPIClient\Model\Billing\Quote::class
                ]
            ],
            'calendar' => [
                'class' => '',
                'children' => [
                    'event:updated' => PortoSpire\PortoSpireSitesAPIClient\Model\Calendar\Event::class,
                    'eventtype:updated' => PortoSpire\PortoSpireSitesAPIClient\Model\Calendar\EventType::class,
                    'location:updated' => PortoSpire\PortoSpireSitesAPIClient\Model\Calendar\Location::class,
                    'recurring:updated' => \PortoSpire\PortoSpireSitesAPIClient\Model\Calendar\RecurringPattern::class
                ]
            ]
        ],
    ]
];
