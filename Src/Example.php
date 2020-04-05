<?php

namespace EdgeAuthExample;

use EdgeAuth\TokenBuilder;

class Example
{
    function __construct()
    {
        $theToken = (new TokenBuilder())
            ->withApplicationId('test')
            ->withSecret('abc')
            ->expiresInSeconds(300);
        $result = $theToken->build();
    }


}
