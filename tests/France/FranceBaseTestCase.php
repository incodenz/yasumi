<?php
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Tests\France;

use PHPUnit_Framework_TestCase;
use Yasumi\Tests\YasumiBase;

/**
 * Base class for test cases of the France holiday provider.
 */
abstract class FranceBaseTestCase extends PHPUnit_Framework_TestCase
{
    use YasumiBase;

    /**
     * Country (name) to be tested
     */
    const COUNTRY = 'France';

    /**
     * Timezone in which this provider has holidays defined
     */
    const TIMEZONE = 'Europe/Paris';
}
