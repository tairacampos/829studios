<?php

namespace FakerPress\ThirdParty\Faker\Provider\fr_BE;

class Company extends \FakerPress\ThirdParty\Faker\Provider\fr_FR\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL'];
}
