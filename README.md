<svg viewBox="0 0 210 297" fill="#66A4D9" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(.50277 0 0 .50277 -.80566 7.2125)">
	<path d="m20.744 159.09 27.2 27.2 21.543-21.543 48.96 48.96-21.543 21.543 27.2 27.2 21.543-21.543 48.96 48.96-21.543 21.543 27.2 27.2 32.856-32.857-78.206-78.206c18.263 3.908 37.44 2.562 55.679-4.264l7.712-2.887c24.186-9.053 50.723-6.565 72.806 6.822 4.346 2.635 8.393 5.623 12.121 8.911l7.422 7.422c10.987 12.47 18.077 28.048 20.174 45.064l11.356 92.154c0.5 4.053 3.948 7.022 7.93 7.022 0.327 0 0.657-0.02 0.989-0.061 4.385-0.541 7.502-4.533 6.961-8.918l-11.356-92.154c-0.352-2.856-0.822-5.677-1.406-8.459l21.132 21.132 32.857-32.857-27.2-27.2-21.543 21.543-48.96-48.96 21.543-21.543-27.2-27.2-21.543 21.543-48.96-48.96 21.543-21.543-27.2-27.2-32.856 32.857 81.364 81.364c-18.294-3.884-37.49-2.538-55.584 4.234l-7.712 2.887c-25.322 9.478-52.802 6.395-75.396-8.458-3.822-2.513-7.384-5.293-10.681-8.3l-5.463-5.463c-12.894-14.146-20.531-32.316-21.51-52.101l-4.486-90.581c-0.218-4.413-3.978-7.813-8.386-7.595-4.413 0.219-7.813 3.973-7.595 8.386l4.486 90.581c0.267 5.399 0.96 10.695 2.039 15.858l-24.392-24.392z"/>
	<path d="m400.5 0h-380c-4.418 0-8 3.582-8 8s3.582 8 8 8h372v170.12c0 4.418 3.582 8 8 8s8-3.582 8-8v-178.12c0-4.418-3.582-8-8-8z"/>
	<path d="m400.5 405h-372v-150.88c0-4.418-3.582-8-8-8s-8 3.582-8 8v158.88c0 4.418 3.582 8 8 8h380c4.418 0 8-3.582 8-8s-3.582-8-8-8z"/>
</g><text x="105.16228" y="244.10722" font-family="'DejaVu Sans'" font-size="25.4px" stroke-width=".26458" text-anchor="middle" xml:space="preserve"><tspan x="105.16228" y="244.10722" text-align="center">PortoSpire Sites</tspan><tspan x="105.16228" y="275.85721" text-align="center">API Client</tspan></text></svg>

<img src="https://img.shields.io/github/v/release/PortoSpire/portospiresitesapiclient" /> <img src="https://img.shields.io/github/languages/code-size/PortoSpire/portospiresitesapiclient" /> <img src="https://img.shields.io/github/license/PortoSpire/portospiresitesapiclient" />
# Client library for use with PortoSpire Sites
A free (LGPL3) client library for use with PortoSpire Sites to abstract various API usage to enable easier integrations.

<a href="https://www.portospire.com/">Provided by PortoSpire <br />
<img src="https://assets.portospire.com/psf/img/portospire%20email%20signature.png" alt="PortoSpire - be seen" width="182" /></a>

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
