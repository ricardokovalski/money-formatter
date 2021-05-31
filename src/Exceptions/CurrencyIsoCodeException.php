<?php

namespace RicardoKovalski\MoneyFormatter\Exceptions;

use InvalidArgumentException;

class CurrencyIsoCodeException extends InvalidArgumentException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
