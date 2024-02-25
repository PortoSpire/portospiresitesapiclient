![PortoSpire Sites API Client](https://assets.portospire.com/github.io/portospiresitesapiclientlogo_glow.svg)

![Version](https://img.shields.io/github/v/release/PortoSpire/portospiresitesapiclient)
![Size](https://img.shields.io/github/languages/code-size/PortoSpire/portospiresitesapiclient)
![License](https://img.shields.io/github/license/PortoSpire/portospiresitesapiclient)
# Client library for use with PortoSpire Sites
A free (LGPL3) client library for use with PortoSpire Sites to abstract various API usage to enable easier integrations.

[Provided by PortoSpire  
<img alt="PortoSpire - be seen" src="https://assets.portospire.com/psf/img/portospire%20header%20glow.svg" width="182" />](https://www.portospire.com)

***

 ## Table of Contents ##
  **[1. Introduction](#introduction)**  
  **[2. Setup](#setup)**  
  **[3. Usage](#usage)**  
   *[3.1. Mezzio](#mezzio)*  
   *[3.2. Laminas MVC](#laminasmvc)*  
   *[3.3. Standalone](#standalone)*  

***

 ## 1. Introduction<a name="introduction" href="#introduction"></a>
This package provides a PortoSpire Sites client to abstract API calls and form
submissions to provide and receive data from a site hosted in PortoSpire's
services.

 ## 2. Setup<a name="setup" href="#setup"></a>
Add to your project's composer.json

```bash
   composer require portospire/portospiresitesapiclient
```     

 ## 3. Usage<a name="usage" href="#usage"></a>
This package is built to support Laminas Mezzio and Laminas MVC as well
as be available as a stand alone library. 

  ### 3.1. Mezzio<a name="mezzio" href="#mezzio"></a>
Add the ConfigProvider class to the config aggregator (typically found in
config/config.php)

```php
   $aggregator = new ConfigAggregator([
   ...
   \PortoSpire\PSFrameworkClient\ConfigProvider::class,
   ...
```

Then use the client in your handlers/middleware as needed for your use cases.

  ### 3.2. Laminas MVC<a name="laminasmvc" href="#laminasmvc"></a>
There should be no additional steps beyond adding to your project's
composer.json required to begin using the library with Laminas MVC.

  ### 3.3. Standalone<a name="standalone" href="#standalone"></a>
There should be no additional steps beyond adding to your project's
composer.json required to begin using the library.
