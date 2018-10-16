define([
    'jquery',
    'jquery/ui',
    'Magento_Catalog/js/price-box'
], function($){

    $.widget('custom.priceBox', $.mage.priceBox, {
        reloadPrice: function reDrawPrices() {
            console.log(this.options);
            var priceUnit = this.options.priceConfig.priceFormat.priceUnit;
            if(priceUnit === null || priceUnit === undefined){
                priceUnit = '';
            }
            this.options.priceTemplate = '<span class="price"><%- data.formatted %> '+ priceUnit +'</span>';
            this._super();
        }
    });

    return $.custom.priceBox;
});