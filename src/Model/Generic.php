<?php

/**
 * Description of Generic
 * 
 * PHP version 7
 * 
 * * * License * * * 
 * Copyright (C) 2021 PORTOSPIRE, All Rights Reserved.
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
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   GIT: $ID$
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 */

namespace PortoSpire\PortoSpireSitesAPIClient\Model;

/**
 * Description of Generic
 *
 * @category  Model
 * @package   PortoSireSitesAPIClient
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   Release: @package_version@
 * @link      https://github.com/PortoSpire/portospiresitesapiclient
 * @since     Class available since Release 0.0.0
 */
class Generic {
    public $id, $type;
    private $attributes;
    
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }
    
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
    
    public function __set($name, $value)
    {
        if(array_key_exists($name, $this->attributes)){
            $this->attributes[$name] = $value;
        }
    }
    
    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
    
    public function extractNonEmpty(): array
    {
        $return = ['id'=>$this->id,'type'=> $this->type];
        foreach($this->attributes as $key=>$value){
            if(!empty($value) && !is_array($value)){
                $return[$key]=$value;
            }
        }
        return $return;
    }
    
    public function toArray(): array
    {
        $arr = ['id'=> $this->id,'type'=>$this->type];
        foreach ($this->attributes as $key=>$value){
            $arr[$key] =$value;
        }
        return $arr;
    }
    
    public function exchangeArray(array $data): Generic
    {
        foreach($data as $key=>$value)
        {
            if(property_exists($this, $key)){
                $this->$key = $value;
            } else {
                $this->attributes[$key]=$value;
            }
        }
        return $this;
    }
}
