<?php

namespace FakerPress\ThirdParty\Faker\Provider\cs_CZ;

class Payment extends \FakerPress\ThirdParty\Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'CZ', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
