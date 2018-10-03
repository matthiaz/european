<?php
/**
 * European
 *
 * @version    2.2 (2018-10-03 03:40:00 GMT)
 * @author     Peter Kahl <https://github.com/peterkahl>
 * @copyright  2018 Peter Kahl
 * @license    Apache License, Version 2.0
 *
 * Copyright 2018 Peter Kahl <https://github.com/peterkahl>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      <http://www.apache.org/licenses/LICENSE-2.0>
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace peterkahl\European;

use \Exception;

class European {

  /**
   * Is country in Europe? Just geographically.
   * @param  string ... 2-char country code
   * @return boolean
   * @throws \Exception
   */
  static public function isEuropeanCountry($code = '') {
    self::ValidateCode($code);
    $code = strtolower($code);
    if (array_key_exists($code, self::$arr)) {
      return true;
    }
    return false;
  }


  /**
   * Is country in EEA (European Economic Area)?
   * @param  string ... 2-char country code
   * @return boolean
   * @throws \Exception
   */
  static public function isEEACountry($code = '') {
    self::ValidateCode($code);
    $code = strtolower($code);
    if (array_key_exists($code, self::$arr)) {
      if (self::$arr[$code]['eea'] == 1) {
        return true;
      }
    }
    return false;
  }


  /**
   * Is country member of the European Union?
   * @param  string ... 2-char country code
   * @return boolean
   * @throws \Exception
   */
  static public function isEuropeanUnionCountry($code = '') {
    self::ValidateCode($code);
    $code = strtolower($code);
    if (in_array($code, self::$arr)) {
      if (self::$arr[$code]['eu'] == 1) {
        return true;
      }
    }
    return false;
  }


  /**
   * Does country use the Euro currency?
   * @param  string ... 2-char country code
   * @return boolean
   * @throws \Exception
   */
  static public function countryUsesEuro($code = '') {
    self::ValidateCode($code);
    $code = strtolower($code);
    if (in_array($code, self::$arr)) {
      if (self::$arr[$code]['€'] == 1) {
        return true;
      }
    }
    return false;
  }


  /**
   * Shall the UK remain in the European Union?
   * @return boolean
   */
  static public function ShallTheUKRemainInTheEuropeanUnion() {
    return true;
  }


  /**
   * Simple validation of 2-letter country code
   * @param  string ... 2-char country code
   * @throws \Exception
   */
  static private function ValidateCode($code = '') {
    if (empty($code) || strlen($code) != 2) {
      throw new Exception('Country code cannot be empty and must be 2 chars long');
    }
  }


  /**
   * Countries' membership in EEA, EU and usage of EUR currency.
   * Sipmle presence (key) indicates geographic location in Europe (the continent).
   * @var  mixed
   */
  private static $arr = array(
    'al' => array( # Albania
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'ad' => array( # Andorra
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'at' => array( # Austria
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'be' => array( # Belgium
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'ba' => array( # Bosnia
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'bg' => array( # Bulgaria
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'by' => array( # Belarus
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'hr' => array( # Croatia
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'cy' => array( # Cyprus
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'cz' => array( # Czech Republic
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'dk' => array( # Denmark
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'ee' => array( # Estonia
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'eu' => array( # European Union
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'fi' => array( # Finland
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'fr' => array( # France
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'de' => array( # Germany
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'gb' => array( # United Kingdom
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'uk' => array( # United Kingdom
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'gg' => array( # Guernsey (UK)
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'gi' => array( # Gibraltar (UK)
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'gr' => array( # Greece
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'hu' => array( # Hungary
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'is' => array( # Iceland
                  'eea' => 1,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'ie' => array( # Ireland
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'it' => array( # Italy
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'je' => array( # Jersey (UK)
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'lv' => array( # Latvia
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'li' => array( # Liechtenstein
                  'eea' => 1,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'lt' => array( # Lithuania
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'lu' => array( # Luxembourg
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'mc' => array( # Monaco
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'md' => array( # Moldova
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'me' => array( # Montenegro
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'mk' => array( # Macedonia
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'mt' => array( # Malta
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'nl' => array( # Netherlands
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'no' => array( # Norway
                  'eea' => 1,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'pl' => array( # Poland
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'pt' => array( # Portugal
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'ro' => array( # Romania
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 0,
                  ),
    'sm' => array( # San Marino
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'cs' => array( # Serbia
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'rs' => array( # Serbia
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'sk' => array( # Slovakia
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'si' => array( # Slovenia
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'es' => array( # Spain
                  'eea' => 1,
                  'eu'  => 1,
                  '€'   => 1,
                  ),
    'se' => array( # Sweden
                  'eea' => 1,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'ch' => array( # Switzerland
                  'eea' => 1,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'tr' => array( # Turkey
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'ua' => array( # Ukraine
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 0,
                  ),
    'va' => array( # Vatican
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
    'xk' => array( # Kosovo
                  'eea' => 0,
                  'eu'  => 0,
                  '€'   => 1,
                  ),
  );

}
