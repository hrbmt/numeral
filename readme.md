# Numeral

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

This package can be installed using Composer by issuing this command in the root of your project:

```
composer require hrbmt/numeral
```

## Getting Started

```php
<?php

use Hrbmt\Numeral\Numeral;

// Create the Numeral instance.
$formatter = new Numeral;

// solution 1
$formatter->setNumber(1000)->format('0,0');

// OR

// solution 2
Numeral::setNumber(1000)->format('0,0');
```


### Numbers

| Number | Format | String |
|---|---|---|
| 10000.234 |  | 10000 |
| 10000.234 | '0.00' | 10000.23 |
| 10000.234 | '0,0.00' | 10,000.23 |
| 10000.234 | '0,0' | 10,000 |


## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

-   [author name][link-author]
-   [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hrbmt/numeral.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hrbmt/numeral.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hrbmt/numeral/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield
[link-packagist]: https://packagist.org/packages/hrbmt/numeral
[link-downloads]: https://packagist.org/packages/hrbmt/numeral
[link-travis]: https://travis-ci.org/hrbmt/numeral
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/hrbmt
[link-contributors]: ../../contributors

## Author
Yang H.

