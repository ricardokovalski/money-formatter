<h1 align="center">ricardokovalski/money-formatter</h1>

<p align="center">
    <strong>Uma biblioteca PHP para formatar valores monetários.</strong>
</p>

<p align="center">
    <a href="https://github.com/ricardokovalski/money-formatter"><img src="http://img.shields.io/badge/source-ricardokovalski/money--formatter-blue.svg" alt="Source Code"></a>
    <a href="https://php.net"><img src="https://img.shields.io/badge/php-%3E=5.6-777bb3.svg" alt="PHP Programming Language"></a>
    <a href="https://github.com/ricardokovalski/money-formatter/releases"><img src="https://img.shields.io/github/release/ricardokovalski/money-formatter.svg" alt="Source Code"></a>
    <a href="https://github.com/ricardokovalski"><img src="http://img.shields.io/badge/author-@ricardokovalski-blue.svg" alt="Author"></a>
    <a href="https://github.com/ricardokovalski/money-formatter/blob/main/LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg" alt="Read License"></a>
</p>

## Sobre

ricardokovalski/money-formatter é uma biblioteca PHP que serve para formatar valores monetários.

## Instalação

Instale este pacote como uma dependência usando [Composer](https://getcomposer.org).

```bash
composer require ricardokovalski/money-formatter
```

## Uso

### BaseFormatterConfig

```php
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);
```

#### Opções

```php
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$formatterConfig->resetCurrencyIsoCode(IsoCodes::USD);
$formatterConfig->resetLocale(Locale::EN_US);
$formatterConfig->resetFractionDigits(3);
```

### DecimalFormatter

```php
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\DecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$decimalFormatter = new DecimalFormatter($formatterConfig);

$decimalFormatter->format(100); //100.00
$decimalFormatter->format(185.45); //185.45
```

### IntlDecimalFormatter

```php
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\IntlDecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$intlDecimalFormatter = new IntlDecimalFormatter($formatterConfig);

$intlDecimalFormatter->format(500.67); //500,67
$intlDecimalFormatter->format(1945.52); //1.945,52
```

### IntlCurrencyFormatter

```php
use RicardoKovalski\MoneyFormatter\Enums\IsoCodes;
use RicardoKovalski\MoneyFormatter\Enums\Locale;
use RicardoKovalski\MoneyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\MoneyFormatter\Formatters\Types\IntlCurrencyFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$intlCurrencyFormatter = new IntlCurrencyFormatter($formatterConfig);

$intlCurrencyFormatter->format(466); //R$466,00
$intlCurrencyFormatter->format(2500.98); //R$2.500,98
```

## Copyright and License

The ricardokovalski/money-formatter library is copyright © [Ricardo Kovalski](https://github.com/ricardokovalski)
and licensed for use under the terms of the
MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
