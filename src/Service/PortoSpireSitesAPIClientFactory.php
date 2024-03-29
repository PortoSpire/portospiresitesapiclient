<?php

/**
 * Description of PortSpireSitesAPIClientFactory
 * 
 * PHP version 7
 * 
 * * * License * * * 
 * Copyright (C) 2021 PortoSpire, LLC.
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
 * @category  Service
 * @package   PortoSpireSitesAPIClient
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   GIT: $ID$
 * @link      https://github.com/PortoSpire/portospiresitesapiclient 
 */

namespace PortoSpire\PortoSpireSitesAPIClient\Service;

use Psr\Container\ContainerInterface;
use Psr\Log\NullLogger;

/**
 * Description of PortoSpireSitesAPIClientFactory
 *
 * @category  Service
 * @package   PortoSpireSitesAPIClient
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   Release: @package_version@
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 * @since     Class available since Release 0.0.0
 */
class PortoSpireSitesAPIClientFactory {
    public function __invoke(ContainerInterface $container) : PortoSpireSitesAPIClient
    {
        $logger = null;
        if($container->has('Logger')){
            $logger = $container->get('Logger');
        } else {
            $logger = new NullLogger();
        }
        return new PortoSpireSitesAPIClient($logger);
    }
}
