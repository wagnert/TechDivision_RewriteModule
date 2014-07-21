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
 * @category   WebServer
 * @package    TechDivision_RewriteModule
 * @subpackage Mock
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace TechDivision\RewriteModule\Mock;

use TechDivision\RewriteModule\Entities\Condition;

/**
 * TechDivision\RewriteModule\Mock\MockCondition
 *
 * Mocks the Condition class to expose additional functionality
 *
 * @category   WebServer
 * @package    TechDivision_RewriteModule
 * @subpackage Mock
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
class MockCondition extends Condition
{
    /**
     * Getter for the $additionalOperand member
     *
     * @return string
     */
    public function getAdditionalOperand()
    {
        return $this->additionalOperand;
    }

    /**
     * Getter for the $action member
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Getter for the $isNegated member
     *
     * @return boolean
     */
    public function getIsNegated()
    {
        return $this->isNegated;
    }
}