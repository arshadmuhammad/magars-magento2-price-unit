<?php
/**
 * Simple
 *
 * @copyright Copyright © 2018 CIKLUM. All rights reserved.
 * @author    amuh@ciklum.com
 */

namespace MagArs\PriceUnit\Plugin\Product;


class Simple extends AbstractPriceUnit {
    public function afterGetProductPrice(\Magento\Catalog\Block\Product\ListProduct $subject, $result){
        return $result;
    }
}