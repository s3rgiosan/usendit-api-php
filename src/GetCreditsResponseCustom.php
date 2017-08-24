<?php

namespace uSendit\API;

class GetCreditsResponseCustom
{

    /**
     * @var GetCreditsResult $GetCreditsResult
     */
    protected $GetCreditsResult = null;

    /**
     * @param GetCreditsResult $GetCreditsResult
     */
    public function __construct($GetCreditsResult)
    {
      $this->GetCreditsResult = $GetCreditsResult;
    }

    /**
     * @return GetCreditsResult
     */
    public function getGetCreditsResult()
    {
      return $this->GetCreditsResult;
    }

    /**
     * @param GetCreditsResult $GetCreditsResult
     * @return \uSendit\API\GetCreditsResponse
     */
    public function setGetCreditsResult($GetCreditsResult)
    {
      $this->GetCreditsResult = $GetCreditsResult;
      return $this;
    }

}
