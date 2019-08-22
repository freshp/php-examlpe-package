<?php declare(strict_types = 1);

namespace Freshp\PhpPackageExample\Test\Fixture;

use Freshp\PhpPackageExample\Example;

trait ExampleFixture
{
    protected $exampleVersion = '0.0.1';

    public function getExampleObject(): Example
    {
        return new Example($this->exampleVersion);
    }
}
