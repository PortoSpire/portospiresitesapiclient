<img src="https://img.shields.io/github/v/release/PortoSpire/PSFrameworkClient" /> <img src="https://img.shields.io/github/languages/code-size/PortoSpire/PSFrameworkClient" /> <img src="https://img.shields.io/github/license/PortoSpire/PSFrameworkClient" />
# Client library for use with PSFramework
A free (LGPL3) client library for use with PSFramework to abstract various API usage to enable easier integrations.
<a href="https://www.portospire.com/">Provided by PortoSpire 
    <img src="https://assets.portospire.com/psf/img/portospire%20header.svg" alt="PortoSpire - be seen" width="182" /></a>

[Introduction](#introduction)
[Setup](#setup)
[Usage](#usage)
* [Mezzio](#mezzio)
* [Laminas MVC](#laminasmvc)
* [Standalone](#standalone)
* [Webhooks](#webhooks)
  

## <a name="introduction" href="#introduction">Introduction</a>
This package provides a PSFramework client to abstract API calls and form submissions to provide and receive 
data from PSFramework instances.

## <a name="setup" href="#setup">Setup</a>
Install libraries
> composer install

## <a name="usage" href="#usage">Usage</a>
This package is built to support mezzio and laminas as well 
as be available as a stand alone library. 

### <a name="mezzio" href="#mezzio">Mezzio</a>
Add the ConfigProvider class to the config aggregator (typically found in config.php)
> \PortoSpire\PSFrameworkClient\ConfigProvider::class,

### <a name="laminasmvc" href="#laminasmvc">Laminas MVC</a>
Add the module to the module config (typically found in APP_DIR/config/modules.config.php)
> PSFrameworkClient

### <a name="standalone" href="#standalone">Standalone</a>

### <a name="webhooks" href="#webhooks">Webhooks</a>