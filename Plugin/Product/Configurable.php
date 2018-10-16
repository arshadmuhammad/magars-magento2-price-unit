<?php
/**
 * Configurable
 *
 * @copyright Copyright © 2018 CIKLUM. All rights reserved.
 * @author    amuh@ciklum.com
 */

namespace MagArs\PriceUnit\Plugin\Product;

class Configurable extends AbstractPriceUnit {

    public function aroundGetPriceFormatJson(\Magento\Swatches\Block\Product\Renderer\Listing\Configurable $subject, \Closure $proceed){
        $returnValue = $proceed();

        $configArray = $this->jsonDecoder->decode($returnValue);

        $product = $this->productRepository->getById($subject->getProduct()->getId());

        $configArray['priceUnit'] = $product->getPriceUnit();

        $returnValue = $this->jsonEncoder->encode($configArray);

        return $returnValue;

    }

}