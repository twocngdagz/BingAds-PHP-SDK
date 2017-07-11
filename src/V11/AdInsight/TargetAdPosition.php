<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible positions where you can target an ad to appear in the search results or on a content-based webpage.
     * @link http://msdn.microsoft.com/en-us/library/mt219330(v=msads.110).aspx TargetAdPosition Value Set
     * 
     * @used-by GetEstimatedBidByKeywordIdsRequest
     * @used-by GetEstimatedBidByKeywordsRequest
     */
    final class TargetAdPosition
    {
        /** Target the first position at the top of the search results page. */
        const MainLine1 = 'MainLine1';

        /** Target the second, third, and fourth positions at the top of the search results page. */
        const MainLine = 'MainLine';

        /** Target any position on the right side of the search results page. */
        const SideBar = 'SideBar';
    }

}
