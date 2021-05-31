<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\IntlDecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlDecimalFormatter = new IntlDecimalFormatter($formatterConfig);

$intlDecimalFormatter->format(268.85); //268,85
