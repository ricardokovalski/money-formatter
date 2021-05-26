<?php

require __DIR__ . '../vendor/autoload.php';

use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$formatterConfig->resetCurrencyIsoCode(IsoCodes::USD);
$formatterConfig->resetLocale(Locale::EN_US);
$formatterConfig->resetFractionDigits(3);
