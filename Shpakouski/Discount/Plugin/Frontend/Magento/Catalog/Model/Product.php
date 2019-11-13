<?php

namespace Shpakouski\Discount\Plugin\Frontend\Magento\Catalog\Model;
class Product
{
    public function afterGetPrice(
        \Magento\Catalog\Model\Product $subject,
        $result
    )
    {
        return $result * 0.9;
    }

    public function afterGetFinalPrice(\Magento\Catalog\Model\Product $subject,
                                       $result)
    {
        return $result * 10 / 9;
    }
}
