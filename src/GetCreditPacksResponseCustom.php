<?php

namespace uSendit\API;

class GetCreditPacksResponseCustom
{

    /**
     * @var GetCreditPacksResult $GetCreditPacksResult
     */
    protected $GetCreditPacksResult = null;

    /**
     * @param GetCreditPacksResult $GetCreditPacksResult
     */
    public function __construct($GetCreditPacksResult)
    {
      $this->GetCreditPacksResult = $GetCreditPacksResult;
    }

    /**
     * @return GetCreditPacksResult
     */
    public function getGetCreditPacksResult()
    {
      return $this->GetCreditPacksResult;
    }

    /**
     * @param GetCreditPacksResult $GetCreditPacksResult
     * @return \uSendit\API\GetCreditPacksResponse
     */
    public function setGetCreditPacksResult($GetCreditPacksResult)
    {
      $this->GetCreditPacksResult = $GetCreditPacksResult;
      return $this;
    }

}
