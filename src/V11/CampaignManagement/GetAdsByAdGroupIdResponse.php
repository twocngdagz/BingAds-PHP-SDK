<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads within an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.110).aspx GetAdsByAdGroupId Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdResponse
    {
        /**
         * The list of ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }
}