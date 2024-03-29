<?php

/**
 * Description of Event
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
 * @category  Model
 * @package   PortoSireSitesAPIClient
 * @author    andrewwallace
 * @copyright 2024 PORTOSPIRE
 * @license   LGPL 3
 * @version   GIT: $ID$
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 */

namespace PortoSpire\PortoSpireSitesAPIClient\Model\Calendar;

use PortoSpire\PortoSpireSitesAPIClient\Model\Generic;

/**
 * Description of Event
 *
 * @category  Model
 * @package   PortoSireSitesAPIClient
 * @author    andrewwallace
 * @copyright 2024 PORTOSPIRE
 * @license   LGPL 3
 * @version   Release: @package_version@
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 * @since     Class available since Release 0.0.0
 */
class Event extends Generic{
    public function __construct($attributes = ['event_id', 'calendar_id', 'name', 'description', 'active', 'submission_id', 
            'eventtype_id', 'start_date', 'end_date', 'start_time', 'end_time', 'is_full_day', 
            'parent_event_id', 'is_public','is_recurring', 'image',
            'recurring_type_id', 'max_num_of_occurances', 'separation_count', 
            'day_of_week', 'day_of_month', 'month_of_year', 'synced', 'hide_start_date',
            'hide_end_date', 'capacity', 'sold', 'currency', 'minimum_price', 'maximum_price',
            'external_url', 'external_id','location_id', 'external_source']) {
        parent::__construct($attributes);
        $this->type = 'calendar.event:updated';
    }
}
