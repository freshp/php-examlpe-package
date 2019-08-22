<?php declare(strict_types = 1);

namespace Freshp\PhpPackageExample;

class Example
{
    private $version;

    public function __construct(string $version)
    {
        $this->version = $version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
