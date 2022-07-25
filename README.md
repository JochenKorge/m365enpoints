# o365endpoints.php

This script is meant as little helper to convert between [Microsofts Office365 Endpoint API](https://docs.microsoft.com/en-us/microsoft-365/enterprise/microsoft-365-ip-web-service?view=o365-worldwide) JSON/CSV and Plaintext IP-Adresses parsable by [OPNsense](https://github.com/opnsense/) Alias definitions.

## Usage

1) Create your own GUID
2) drop the File on any Webserver with php enabled
3) Create an "URL Table (IPs)" Alias in OPNsense and point it to your hosted version of this script
4) you might limit the results with the ?area=<Common | Exchange | SharePoint | Skype> option (defaults to all)

## Limitations

Supports legacy IP only.

## Contribution

Just create a pull request ;)
