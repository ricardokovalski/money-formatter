<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\DecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlCurrencyFormatter = new DecimalFormatter($formatterConfig);

$intlCurrencyFormatter->format(268.85); //268.85
$intlCurrencyFormatter->format(702); //702.00
