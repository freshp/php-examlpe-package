<?php declare(strict_types = 1);

namespace Freshp\PhpPackageExample\Test;

use Freshp\PhpPackageExample\Test\Fixture\ExampleFixture;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    use ExampleFixture;

    public function testCreateExampleAndGetVersion()
    {
        $example = $this->getExampleObject();
        $this->assertEquals($this->exampleVersion, $example->getVersion());
    }
}
