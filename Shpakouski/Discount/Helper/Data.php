<?php

namespace Shpakouski\Discount\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Checkout\Model\Session;

class Data extends AbstractHelper
{
    protected $_checkoutSession;

    public function __construct(
        Context $context,
        Session $session
    )
    {
        parent::__construct($context);
        $this->_checkoutSession = $session;
    }

    public function getTotalMessage()
    {
        return __('MESSAGE FROM LAB4 SHPAKOUSKI : >>>>YOU HAVE VERY BIG BIG DISCOUNT !!! YOU MUST BUY THAT NOW !!!<<<<');
    }
}