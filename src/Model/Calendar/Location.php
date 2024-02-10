<?php

/**
 * Description of Location
 * 
 * PHP version 8
 * 
 * * * License * * * 
 * Copyright (C) 2024 PORTOSPIRE, All Rights Reserved.
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
 * @category  CategoryName
 * @package   PackageName
 * @author    andrewwallace
 * @copyright 2024 PORTOSPIRE
 * @license   https://portospire.com/policies Proprietary, Confidential
 * @version   GIT: $ID$
 * @link      https://portospire.com 
 */

namespace PortoSpire\PSFrameworkClient\Model\Calendar;

use PortoSpire\PSFrameworkClient\Model\Generic;

/**
 * Description of Location
 *
 * @category  CategoryName
 * @package   PackageName
 * @author    andrewwallace
 * @copyright 2024 PORTOSPIRE
 * @license   https://portospire.com/policies Proprietary
 * @version   Release: @package_version@
 * @link      https://coderepo.portospire.com/#git_repo_name
 * @since     Class available since Release 0.0.0
 */
class Location extends Generic{
    public function __construct($attributes = ['location_id', 'site_id', 'name', 
        'description', 'active', 'created', 'updated', 'image', 'street', 'street2', 
        'city', 'region', 'country', 'postalCode', 'lat', 'lon', 'external_id']) {
        parent::__construct($attributes);
        $this->type = 'calendar.location:updated';
    }
}