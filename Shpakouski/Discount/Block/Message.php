<?php

namespace Shpakouski\Discount\Block;

use Magento\Framework\View\Element\Template;
use Shpakouski\Discount\Helper\Data;

class Message extends Template
{
    protected $_helper;

    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_helper = $helper;
    }

    public function getMessage()
    {
        return $this->_helper->getTotalMessage();
    }
}