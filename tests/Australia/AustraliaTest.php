<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Australia;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Australia.
 */
class AustraliaTest extends AustraliaBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all national holidays in Australia are defined by the provider class
     */
    public function testNationalHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'goodFriday',
            'easterMonday',
            'christmasDay',
            'secondChristmasDay',
            'australiaDay',
            'anzacDay',
        ], $this->region, $this->year, Holiday::TYPE_NATIONAL);
    }

    /**
     * Tests if all observed holidays in Australia are defined by the provider class
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([], $this->region, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Australia are defined by the provider class
     */
    public function testSeasonalHolidays()
    {
        $this->assertDefinedHolidays([], $this->region, $this->year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Australia are defined by the provider class
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], $this->region, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Australia are defined by the provider class
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays([], $this->region, $this->year, Holiday::TYPE_OTHER);
    }

    /**
     * Initial setup of this Test Case
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(1987);
    }
}
