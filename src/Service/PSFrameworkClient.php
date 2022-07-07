<?php

/**
 * Description of PSFrameworkClient
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
 * @category  CategoryName
 * @package   PackageName
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   GIT: $ID$
 * @link      https://portospire.com 
 */

namespace PortoSpire\PSFrameworkClient\Service;

use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\RequestException,
    \GuzzleHttp\Exception\BadResponseException;
use \GuzzleHttp\Psr7;
use \GuzzleHttp\Psr7\Request;
use \Psr\Log\LoggerInterface;

/**
 * Description of PSFrameworkClient
 *
 * @category  CategoryName
 * @package   PackageName
 * @author    andrewwallace
 * @copyright 2021 PORTOSPIRE
 * @license   LGPL 3
 * @version   Release: @package_version@
 * @link      https://coderepo.portospire.com/#git_repo_name
 * @since     Class available since Release 0.0.0
 */
class PSFrameworkClient {
    const _access_url = '/oauth',
        _rest_url = '/',
        _modes = ['GET' => 'get', 'POST' => 'post', 'PUT' => 'put', 'PATCH' => 'patch', 'DELETE' => 'delete'];

    private $logger, $server_domain, $client_id, $client_secret, $access_token, $token_expires,
        $guzzle, $user, $password, $sid, $scopes = [];

    public function __construct(LoggerInterface $logger, array $config = [])
    {
        $this->logger = $logger;
        if (isset($config['client_id'])) {
            $this->client_id = $config['client_id'];
        }
        if (isset($config['client_secret'])) {
            $this->client_secret = $config['client_secret'];
        }
        if (isset($config['server_domain'])) {
            $this->server_domain = $config['server_domain'];
        }
        if (isset($config['user'])) {
            $this->user = $config['user'];
        }
        if (isset($config['password'])) {
            $this->password = $config['password'];
        }
        $this->guzzle = new Client(['headers' => ['Content-type: application/vnd.api+json',
                'Accept: */*']]);
    }
    
    public function setConfig(array $config)
    {
        if (isset($config['ClientId'])) {
            $this->client_id = $config['ClientId'];
        }
        if (isset($config['ClientSecret'])) {
            $this->client_secret = $config['ClientSecret'];
        }
        if (isset($config['ServerDomain'])) {
            $this->server_domain = $config['ServerDomain'];
        }
        if(isset($config['Scopes'])){
            $this->scopes = $config['Scopes'];
        }
    }
    
    public function setAccessToken($token,$expires)
    {
        $this->access_token = $token;
        $this->token_expires = $expires;
    }
    
    /*
     * applies to bearer tokens
     */

    public function getCurrentAccessToken()
    {
        return ['token' => $this->access_token, 'expires' => $this->token_expires];
    }
    
    private function checkMode($mode)
    {

        if ($key = array_search($mode, $this::_modes)) {
            return $key;
        }
        if (array_key_exists($mode, $this::_modes)) {
            return $mode;
        }
        return 'GET'; // default to GET
    }
    
    public function convertJsonToGenerics(array $decoded_json)
    {
        $res = [];
        foreach($decoded_json['data'] as $obj){
            $newObj = new Generic();
            $res[] = $newObj->exchangeArray($obj);
        }
        return $res;
    }
    
    public function callApi(string $uri, string $http_mode, string $body = null)
    {
        $mode = $this->checkMode($http_mode);
        if (!isset($this->token_expires) || time() >= $this->token_expires) {
            $access_token = $this->getAccessToken();
        }
        try {
            $this->logger->debug('Requesting api uri: ' . $uri);
            $request = new Request($mode, "https://{$this->server_domain}/{$uri}",
                [
                    "Authorization" => "Bearer {$this->access_token}",
                    "Content-Type" => "application/vnd.api+json",
                    "Cache-Control" => "no-cache",
                ]
            );

            if (!is_null($body)) {
                $request->setBody($body);
            }
            $response = $this->guzzle->send($request);
            if ($response->getStatusCode() == 200) {
                return json_decode($response->getBody(), true);
            } else {
                $this->logger->error('PSFramework: unable to make call to destination service');
                return false;
            }
        } catch (RequestException $e) {
            $this->logger->notice(Psr7\str($e->getRequest()));
            if ($e->hasResponse()) {
                $this->logger->error(Psr7\str($e->getResponse()));
            }
        }
    }
    
    private function getAccessToken(): string
    {
        if (isset($this->access_token) && isset($this->token_expires) && time() < $this->token_expires) {
            return $this->access_token;
        }
        try {
            $response = $this->guzzle->request('POST', 'https://' . $this->server_domain . $this::_access_url, ['multipart' =>
                [
                    ['name' => 'grant_type', 'contents' => 'client_credentials'],
                    ['name' => 'client_id', 'contents' => $this->client_id],
                    ['name' => 'scope','contents' => implode(' ', $this->scopes)],
                    ['name' => 'client_secret', 'contents' => $this->client_secret]
                ],
            ]);
            if ($response->getStatusCode() === 200) {
                $out = json_decode($response->getBody(), true);
                if (isset($out['access_token'])) {
                    $this->access_token = $out['access_token'];
                    $this->token_expires = (time() + $out['expires_in']);
                    return $this->access_token;
                }
                $this->logger->error('PSFramework: unable to get access token. ' . $response->getBody());
            }
        } catch (RequestException $e) {
            $this->logger->error(Psr7\str($e->getRequest()));
            if ($e->hasResponse()) {
                $this->logger->error(Psr7\str($e->getResponse()));
            } else {
                $this->logger->error($e->getMessage());
            }
        } catch (BadResponseException $e) {
            $this->logger->error(Psr7\str($e->getRequest()));
            if ($e->hasResponse()) {
                $this->logger->error(Psr7\str($e->getResponse()));
            }
        } catch (\Exception $e) {
            $this->logger->error('PSFramework: unable to get access token. ' . $e->getMessage());
        }
        throw new \Exception('PSFramework: unable to fetch access token. Check the logs for details.');
    }

    public function setClientId(string $client_id)
    {
        $this->client_id = $client_id;
    }

    public function setClientSecret(string $client_secret)
    {
        $this->client_secret = $client_secret;
    }

    public function setUser(string $user)
    {
        $this->user = $user;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setServerDomain(string $domain)
    {
        $this->server_domain = $domain;
    }
    
    public function addScope(string $scope)
    {
        if(!in_array($scope, $this->scopes)){
            $this->scopes[] = $scope;
        }
    }
    
    public function hasScope(string $scope)
    {
        return in_array($scope, $this->scopes);
    }
    
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;
    }
}
