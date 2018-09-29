# European

[![License](http://img.shields.io/:license-apache-blue.svg)](http://www.apache.org/licenses/LICENSE-2.0.html)
[![If this project has business value for you then don't hesitate to support me with a small donation.](https://img.shields.io/badge/Donations-via%20Paypal-blue.svg)](https://www.paypal.me/PeterK93)

Methods relating to Europe and the European Union.

## Usage

```php
use peterkahl\European\European;

echo (European::ShallTheUKRemainInTheEuropeanUnion()) ? 'yes' : 'no'; # yes

echo (European::isEuropeanCountry('RU')) ? 'yes' : 'no';      # no
echo (European::isEuropeanCountry('AL')) ? 'yes' : 'no';      # yes

echo (European::isEEACountry('AR')) ? 'yes' : 'no';           # no
echo (European::isEEACountry('NO')) ? 'yes' : 'no';           # yes

echo (European::isEuropeanUnionCountry('CA')) ? 'yes' : 'no'; # no
echo (European::isEuropeanUnionCountry('GB')) ? 'yes' : 'no'; # yes

echo (European::countryUsesEuro('GB')) ? 'yes' : 'no';        # no
echo (European::countryUsesEuro('MC')) ? 'yes' : 'no';        # yes

```
