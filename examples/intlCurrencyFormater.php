<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\IntlCurrencyFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlCurrencyFormatter = new IntlCurrencyFormatter($formatterConfig);

$intlCurrencyFormatter->format(250.75); //R$250.75

