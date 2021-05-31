<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$formatterConfig->resetCurrencyIsoCode(IsoCodes::USD);
$formatterConfig->resetLocale(Locale::EN_US);
$formatterConfig->resetFractionDigits(3);
