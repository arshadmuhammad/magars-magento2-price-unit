<?php
/**
 * Created by PhpStorm.
 * User: arshadmuhammad
 * Date: 14/10/2018
 * Time: 11:36 PM
 */

namespace MagArs\PriceUnit\Plugin\Product;

class View extends AbstractPriceUnit{

    public function aroundGetJsonConfig(\Magento\Catalog\Block\Product\View $subject, \Closure $proceed){
        $returnValue = $proceed();

        $configArray = $this->jsonDecoder->decode($returnValue);
        $product = $this->productRepository->getById($configArray['productId']);
        $configArray['priceFormat']['priceUnit'] = $product->getPriceUnit();

        $returnValue = $this->jsonEncoder->encode($configArray);

        return $returnValue;
    }

}