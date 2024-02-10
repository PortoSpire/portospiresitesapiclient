<?php

/**
 * Description of Country
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

/**
 * Description of Country
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
class Country Extends PortoSpire\PSFrameworkClient\Model\Generic {
    public function __construct($attributes = ['country_code', 'country_name', 
        'country_alpha3_code', 'country_numeric_code', 'capital', 'country_demonym', 
        'total_area', 'population', 'idd_code', 'currency_code', 'currency_name', 
        'currency_symbol', 'lang_code', 'lang_name', 'cctld']) {
        parent::__construct($attributes);
    }
}
