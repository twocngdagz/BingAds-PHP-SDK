<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.110).aspx UpdateInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderRequest
    {
        /**
         * An insertion order to update within the account specified in the InsertionOrder object.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
