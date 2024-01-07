<img src="https://assets.portospire.com/github.io/portospiresitesapiclientlogo.svg" style="max-height:25vh" />

<img src="https://img.shields.io/github/v/release/PortoSpire/portospiresitesapiclient" /> <img src="https://img.shields.io/github/languages/code-size/PortoSpire/portospiresitesapiclient" /> <img src="https://img.shields.io/github/license/PortoSpire/portospiresitesapiclient" />
# Client library for use with PortoSpire Sites
A free (LGPL3) client library for use with PortoSpire Sites to abstract various API usage to enable easier integrations.
<a href="https://www.portospire.com/">Provided by PortoSpire 
    <img src="https://assets.portospire.com/psf/img/portospire%20header.svg" alt="PortoSpire - be seen" width="182" /></a>

[Introduction](#introduction)
[Setup](#setup)
[Usage](#usage)
* [Mezzio](#mezzio)
* [Laminas MVC](#laminasmvc)
* [Standalone](#standalone)
  

## <a name="introduction" href="#introduction">Introduction</a>
This package provides a PortoSpire Sites client to abstract API calls and form submissions to provide and receive 
data from a site hosted in PortoSpire's services.

## <a name="setup" href="#setup">Setup</a>
Add to your project's composer.json
> composer require portospire/portospiresitesapiclient

## <a name="usage" href="#usage">Usage</a>
This package is built to support Laminas Mezzio and Laminas MVC as well 
as be available as a stand alone library. 

### <a name="mezzio" href="#mezzio">Mezzio</a>
Add the ConfigProvider class to the config aggregator (typically found in config/config.php)

example TBD


### <a name="laminasmvc" href="#laminasmvc">Laminas MVC</a>
There should be no additional steps beyond adding to your project's composer.json required to begin using the library with Laminas MVC.

### <a name="standalone" href="#standalone">Standalone</a>
There should be no additional steps beyond adding to your project's composer.json required to begin using the library.
