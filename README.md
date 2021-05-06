<h1 align="center">ricardokovalski/currency-formatter</h1>

<p align="center">
    <strong>Uma biblioteca PHP para formatar valores monetários.</strong>
</p>

<p align="center">
    <a href="https://github.com/ricardokovalski/currency-formatter"><img src="http://img.shields.io/badge/source-ricardokovalski/currency-formatter-blue.svg?style=flat-square" alt="Source Code"></a>
    <a href="https://packagist.org/packages/ricardokovalski/currency-formatter"><img src="https://img.shields.io/packagist/v/ricardokovalski/currency-formatter.svg?style=flat-square&label=release" alt="Download Package"></a>
    <a href="https://github.com/ricardokovalski/currency-formatter/blob/master/LICENSE"><img src="https://img.shields.io/packagist/l/ricardokovalski/currency-formatter.svg?style=flat-square&colorB=darkcyan" alt="Read License"></a>
</p>

## Sobre

ricardokovalski/currency-formatter é uma biblioteca PHP que serve para formatar valores monetários.

## Instalação

Instale este pacote como uma dependência usando [Composer](https://getcomposer.org).

```bash
composer require ricardokovalski/currency-formatter
```

## Uso

### DecimalFormatter

```php
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\DecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$decimalFormatter = new DecimalFormatter($formatterConfig);

$decimalFormatter->format(100); //100.00
$decimalFormatter->format(185.45); //185.45
```

### IntlDecimalFormatter

```php
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\IntlDecimalFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$intlDecimalFormatter = new IntlDecimalFormatter($formatterConfig);

$intlDecimalFormatter->format(500.67); //500,67
$intlDecimalFormatter->format(1945.52); //1.945,52
```

### IntlCurrencyFormatter

```php
use RicardoKovalski\CurrencyFormatter\Enums\IsoCodes;
use RicardoKovalski\CurrencyFormatter\Enums\Locale;
use RicardoKovalski\CurrencyFormatter\Formatters\BaseFormatterConfig;
use RicardoKovalski\CurrencyFormatter\Formatters\Types\IntlCurrencyFormatter;

$formatterConfig = new BaseFormatterConfig(IsoCodes::BRL, Locale::PT_BR);

$intlCurrencyFormatter = new IntlCurrencyFormatter($formatterConfig);

$intlCurrencyFormatter->format(466); //R$466,00
$intlCurrencyFormatter->format(2500.98); //R$2.500,98
```



## Copyright and License

The ricardokovalski/currency-formatter library is copyright © [Ricardo Kovalski](https://github.com/ricardokovalski)
and licensed for use under the terms of the
MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
