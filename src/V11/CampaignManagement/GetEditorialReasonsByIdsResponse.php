<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.110).aspx GetEditorialReasonsByIds Response Object
     * 
     * @uses EditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsResponse
    {
        /**
         * An array of EditorialReasonCollection objects that corresponds directly to the EntityIdToParentIdAssociation objects that you specified in the request.
         * @var EditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}