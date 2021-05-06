<?php

namespace RicardoKovalski\CurrencyFormatter\Exceptions;

use InvalidArgumentException;

class CurrencyIsoCodeException extends InvalidArgumentException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}


