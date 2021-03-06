<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_RewriteModule
 * @subpackage Dictionaries
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace TechDivision\RewriteModule\Dictionaries;

/**
 * TechDivision\RewriteModule\Dictionaries\RuleFlags
 *
 * This file is a dictionary for rule flags.
 * Defines constant for flags we might use within the rule's flag field
 *
 * @category   Appserver
 * @package    TechDivision_RewriteModule
 * @subpackage Dictionaries
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
class RuleFlags
{
    /**
     * Make a redirect instead of a mere rewrite
     *
     * @var string
     */
    const REDIRECT = 'R';

    /**
     * Take the target from a specified map
     *
     * @var string
     */
    const MAP = 'M';

    /**
     * Do not process following rewrite rules if this one matches
     *
     * @var string
     */
    const LAST = 'L';
}
