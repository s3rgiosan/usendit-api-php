<?php

namespace uSendit\API;

class GetPartnerEventsResponse
{

    /**
     * @var GetPartnerEventsResult $GetPartnerEventsResult
     */
    protected $GetPartnerEventsResult = null;

    /**
     * @param GetPartnerEventsResult $GetPartnerEventsResult
     */
    public function __construct($GetPartnerEventsResult)
    {
      $this->GetPartnerEventsResult = $GetPartnerEventsResult;
    }

    /**
     * @return GetPartnerEventsResult
     */
    public function getGetPartnerEventsResult()
    {
      return $this->GetPartnerEventsResult;
    }

    /**
     * @param GetPartnerEventsResult $GetPartnerEventsResult
     * @return \uSendit\API\GetPartnerEventsResponse
     */
    public function setGetPartnerEventsResult($GetPartnerEventsResult)
    {
      $this->GetPartnerEventsResult = $GetPartnerEventsResult;
      return $this;
    }

}
