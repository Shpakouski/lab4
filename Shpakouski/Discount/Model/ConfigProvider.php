<?php

namespace Shpakouski\Discount\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Shpakouski\Discount\Helper\Data;

class ConfigProvider implements ConfigProviderInterface
{
    protected $_helper;

    public function __construct(Data $helper)
    {
        $this->_helper = $helper;
    }

    public function getConfig()
    {
        return [
            'totalmessage' => $this->_helper->getTotalMessage()
        ];
    }
}