<?php

namespace Ssch\LegacyExtension\Tests\Unit\Service;

use Iterator;
use Ssch\LegacyExtension\Service\MyService;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Ssch\LegacyExtension\Service\MyService
 */
final class MyServiceTest extends TestCase
{
    /**
     * @var MyService
     */
    private $subject;

    protected function setUp(): void
    {
        $this->subject = new MyService();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function removeFooFromTheBeginningOfTheString(string $input, string $expected): void
    {
        $this->assertSame($expected, $this->subject->removeFooFromTheBeginningOfTheStringCaseInsensitive($input));
    }

    public function dataProvider(): Iterator
    {
        yield 'I am not a fool stays as it is' => ['Not a fool', 'Not a fool'];
        yield 'Substitute Fool to l' => ['Fool', 'l'];
    }
}
