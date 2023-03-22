<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use TypeError;
use ValueError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencyNumeric
 */
class CurrencyNumericTest extends TestCase
{
    /**
     * @covers ::toCurrencyAlpha3
     */
    public function testAllCasesCanBeConvertedToISO4217Alpha3(): void
    {
        $cases = CurrencyNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyAlpha3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Alpha3', $case->name));
            }
        }
    }

    /**
     * @covers ::toCurrencyName
     */
    public function testAllCasesCanBeConvertedToISO4217Name(): void
    {
        $cases = CurrencyNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyName();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Name', $case->name));
            }
        }
    }

    /**
     * @covers ::fromInt
     */
    public function testFromInt(): void
    {
        static::assertEquals(CurrencyNumeric::Lek, CurrencyNumeric::fromInt(8));
    }

    /**
     * @covers ::fromInt
     */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        static::assertNull(CurrencyNumeric::fromInt(1));
    }

    /**
     * @covers ::tryFromInt
     */
    public function testTryFromInt(): void
    {
        static::assertEquals(CurrencyNumeric::Lek, CurrencyNumeric::tryFromInt(8));
        static::assertNull(CurrencyNumeric::tryFromInt(1));
    }

    /**
     * @covers ::valueAsInt
     */
    public function testValueAsInt(): void
    {
        static::assertSame(965, CurrencyNumeric::ADB_Unit_of_Account->valueAsInt());
    }
}
