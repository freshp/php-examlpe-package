[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)

# freshp/php-package-example

* this package provide a template for new packages

## Example
* take a look at the *example-folder* to get the idea and the usage of this package

## Checks
Run each command in the project root directory.

### Execute PHPUnit tests
```
./vendor/bin/phpunit.phar -c ./phpunit.xml --testdox
```

### Execute PHPSTAN checks

```
./vendor/bin/phpstan.phar analyse -l max -c ./phpstan.neon ./src
```

### Execute PHPMD checks

```
./vendor/bin/phpmd.phar ./src text ./phpmd.xml 
```

### Execute PHPCS checks

```
./vendor/bin/phpcs.phar ./src --standard=PSR2 
```

### Execute PHPCS-Fixer

```
./vendor/bin/phpcs-fixer.phar fix ./src
```
