# CZ IC Validator

The Validator for validation of CZ IC based on [the code written by David Grudl](https://gist.github.com/dg/6031c39a148478f0880c).

## Getting Started

### Installing

Install with composer
```
require visionappscz/cz-ic-validator
```

### Usage example
```
$validator = new CZICValidator();
if ($validator->validate('12345678')) {
    echo "IC is valid.";
} else {
    echo "IC is not valid!";
}
```
