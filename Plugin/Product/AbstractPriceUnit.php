<?php
/**
 * AbstractPriceUnit
 *
 * @copyright Copyright © 2018 CIKLUM. All rights reserved.
 * @author    amuh@ciklum.com
 */

namespace MagArs\PriceUnit\Plugin\Product;

use Magento\Framework\Json\EncoderInterface;
use Magento\Framework\Json\DecoderInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class AbstractPriceUnit {

    /** @var ProductRepositoryInterface */
    protected $productRepository;

    /** @var DecoderInterface  */
    protected $jsonDecoder;

    /** @var EncoderInterface  */
    protected $jsonEncoder;

    public function __construct(
        EncoderInterface $jsonEncoder,
        DecoderInterface $jsonDecoder,
        ProductRepositoryInterface $productRepository
    ) {
        $this->jsonEncoder = $jsonEncoder;
        $this->jsonDecoder = $jsonDecoder;
        $this->productRepository = $productRepository;
    }

}