<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\DecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlCurrencyFormatter = new DecimalFormatter($formatterConfig);

$intlCurrencyFormatter->format(268.85); //268.85

