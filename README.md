# European

[![License](http://img.shields.io/:license-apache-blue.svg)](http://www.apache.org/licenses/LICENSE-2.0.html)
[![If this project has business value for you then don't hesitate to support me with a small donation.](https://img.shields.io/badge/Donations-via%20Paypal-blue.svg)](https://www.paypal.me/PeterK93)

Methods relating to Europe and the European Union.

## Usage

```php
use peterkahl\European\European;

echo European::isEuropeanCountry('RU'); # false
echo European::isEuropeanCountry('AL'); # true

echo European::isEEACountry('AR'); # false
echo European::isEEACountry('NO'); # true

echo European::isEuropeanUnionCountry('CA'); # false
echo European::isEuropeanUnionCountry('GB'); # true

echo European::countryUsesEuro('GB'); # false
echo European::countryUsesEuro('MC'); # true

```
