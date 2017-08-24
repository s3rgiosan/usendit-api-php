<?php

namespace uSendit\API;

class BuyCreditsResponse
{

    /**
     * @var BuyCreditsResult $BuyCreditsResult
     */
    protected $BuyCreditsResult = null;

    /**
     * @param BuyCreditsResult $BuyCreditsResult
     */
    public function __construct($BuyCreditsResult)
    {
      $this->BuyCreditsResult = $BuyCreditsResult;
    }

    /**
     * @return BuyCreditsResult
     */
    public function getBuyCreditsResult()
    {
      return $this->BuyCreditsResult;
    }

    /**
     * @param BuyCreditsResult $BuyCreditsResult
     * @return \uSendit\API\BuyCreditsResponse
     */
    public function setBuyCreditsResult($BuyCreditsResult)
    {
      $this->BuyCreditsResult = $BuyCreditsResult;
      return $this;
    }

}
