<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\BackedEnum;

/**
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
 */
enum ISO639_2_Alpha_3_Bibliographic: string
{
    case Albanian                    = 'alb';
    case Armenian                    = 'arm';
    case Basque                      = 'baq';
    case Burmese                     = 'bur';
    case Chinese                     = 'chi';
    case Czech                       = 'cze';
    case Dutch_Flemish               = 'dut';
    case French                      = 'fre';
    case Georgian                    = 'geo';
    case German                      = 'ger';
    case Greek_Modern_1453           = 'gre';
    case Icelandic                   = 'ice';
    case Macedonian                  = 'mac';
    case Malay                       = 'may';
    case Maori                       = 'mao';
    case Persian                     = 'per';
    case Romanian_Moldavian_Moldovan = 'rum';
    case Slovak                      = 'slo';
    case Tibetan                     = 'tib';
    case Welsh                       = 'wel';

    public function toISO639_2_Alpha_3_Terminology(): ISO639_2_Alpha_3_Common|ISO639_2_Alpha_3_Terminology|null
    {
        return BackedEnum::tryFromKey(ISO639_2_Alpha_3_Common::class, $this->name) ?? BackedEnum::tryFromKey(ISO639_2_Alpha_3_Terminology::class, $this->name) ?? null;
    }

    public function toISO639_1_Alpha_2(): ISO639_1_Alpha_2|null
    {
        return BackedEnum::tryFromKey(ISO639_1_Alpha_2::class, $this->name);
    }

    public function toISO639_Name(): ISO639_Name
    {
        return BackedEnum::fromKey(ISO639_Name::class, $this->name);
    }

    public function upperCaseValue(): string
    {
        return strtoupper($this->value);
    }
}
