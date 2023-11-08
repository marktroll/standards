<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\Schengen;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Groups\Schengen */
class SchengenTest extends TestCase
{
    /** @covers ::allAlpha2 */
    public function testAllAlpha2(): void
    {
        static::assertSame(
            [
                CountryAlpha2::Austria,
                CountryAlpha2::Belgium,
                CountryAlpha2::Croatia,
                CountryAlpha2::Czechia,
                CountryAlpha2::Denmark,
                CountryAlpha2::Estonia,
                CountryAlpha2::Finland,
                CountryAlpha2::France,
                CountryAlpha2::Germany,
                CountryAlpha2::Greece,
                CountryAlpha2::Hungary,
                CountryAlpha2::Iceland,
                CountryAlpha2::Italy,
                CountryAlpha2::Latvia,
                CountryAlpha2::Liechtenstein,
                CountryAlpha2::Lithuania,
                CountryAlpha2::Luxembourg,
                CountryAlpha2::Malta,
                CountryAlpha2::Netherlands,
                CountryAlpha2::Norway,
                CountryAlpha2::Poland,
                CountryAlpha2::Portugal,
                CountryAlpha2::Slovakia,
                CountryAlpha2::Slovenia,
                CountryAlpha2::Spain,
                CountryAlpha2::Sweden,
                CountryAlpha2::Switzerland,
            ],
            Schengen::allAlpha2()
        );
    }
}
