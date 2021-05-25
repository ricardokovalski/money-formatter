<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\IntlDecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlDecimalFormatter = new IntlDecimalFormatter($formatterConfig);

$intlDecimalFormatter->format(268.85); //268,85

