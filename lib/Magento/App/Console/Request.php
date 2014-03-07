<?php
/**
 * Console request
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\App\Console;

class Request implements \Magento\App\RequestInterface
{
    /**
     * @var array
     */
    protected $params;

    /**
     * @param array $parameters
     */
    public function __construct(
        array $parameters = array()
    ) {
        $this->setParam($parameters);
    }

    /**
     * Initialize console parameters
     *
     * @param array $parameters
     */
    public function setParam($parameters)
    {
        $this->params = getopt(null, $parameters);
    }

    /**
     * Retrieve module name
     *
     * @return string
     */
    public function getModuleName()
    {
        return;
    }

    /**
     * Set Module name
     *
     * @param string $name
     */
    public function setModuleName($name)
    {
    }

    /**
     * Retrieve action name
     *
     * @return string
     */
    public function getActionName()
    {
        return;
    }

    /**
     * Set action name
     *
     * @param string $name
     */
    public function setActionName($name)
    {
    }

    /**
     * Retrieve param by key
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getParam($key, $defaultValue = null)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return $defaultValue;
    }
}