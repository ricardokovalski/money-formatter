<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\IntlCurrencyFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
$intlCurrencyFormatter = new IntlCurrencyFormatter($formatterConfig);

$intlCurrencyFormatter->format(250.75); //R$250.75

