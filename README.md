# kunta-api-php-client
One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Package version: 0.0.1-alpha1
- Build date: 2016-08-25T13:50:15.954+03:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/otavanopisto/kunta-api-php-client.git"
    }
  ],
  "require": {
    "otavanopisto/kunta-api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/kunta-api-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceCategoriesApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listServiceClasses($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCategoriesApi->listServiceClasses: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ServiceCategoriesApi* | [**listServiceClasses**](docs/Api/ServiceCategoriesApi.md#listserviceclasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization
*ServiceChannelsApi* | [**listServiceElectornicChannels**](docs/Api/ServiceChannelsApi.md#listserviceelectornicchannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /organizations/{organizationId}/services | Create a service
*ServicesApi* | [**deleteService**](docs/Api/ServicesApi.md#deleteservice) | **DELETE** /organizations/{organizationId}/services/{serviceId} | Delete a service
*ServicesApi* | [**findService**](docs/Api/ServicesApi.md#findservice) | **GET** /organizations/{organizationId}/services/{serviceId} | Find a service by id
*ServicesApi* | [**findServiceSource**](docs/Api/ServicesApi.md#findservicesource) | **GET** /serviceSources/{serviceSourceId} | Find a service by id
*ServicesApi* | [**listServiceClasses**](docs/Api/ServicesApi.md#listserviceclasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization
*ServicesApi* | [**listServiceElectornicChannels**](docs/Api/ServicesApi.md#listserviceelectornicchannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels
*ServicesApi* | [**listServiceSources**](docs/Api/ServicesApi.md#listservicesources) | **GET** /serviceSources | List service sources
*ServicesApi* | [**listServices**](docs/Api/ServicesApi.md#listservices) | **GET** /organizations/{organizationId}/services | List services
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /organizations/{organizationId}/services/{serviceId} | Update a service
*ServicesSourcesApi* | [**findServiceSource**](docs/Api/ServicesSourcesApi.md#findservicesource) | **GET** /serviceSources/{serviceSourceId} | Find a service by id
*ServicesSourcesApi* | [**listServiceSources**](docs/Api/ServicesSourcesApi.md#listservicesources) | **GET** /serviceSources | List service sources
*SourcesApi* | [**findServiceSource**](docs/Api/SourcesApi.md#findservicesource) | **GET** /serviceSources/{serviceSourceId} | Find a service by id
*SourcesApi* | [**listServiceSources**](docs/Api/SourcesApi.md#listservicesources) | **GET** /serviceSources | List service sources


## Documentation For Models

 - [Attachment](docs/Model/Attachment.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [LocalizedValue](docs/Model/LocalizedValue.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [Service](docs/Model/Service.md)
 - [ServiceChannelCommon](docs/Model/ServiceChannelCommon.md)
 - [ServiceClass](docs/Model/ServiceClass.md)
 - [ServiceDescription](docs/Model/ServiceDescription.md)
 - [ServiceElectronicChannel](docs/Model/ServiceElectronicChannel.md)
 - [ServiceHour](docs/Model/ServiceHour.md)
 - [ServiceSource](docs/Model/ServiceSource.md)
 - [Support](docs/Model/Support.md)
 - [WebPage](docs/Model/WebPage.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




