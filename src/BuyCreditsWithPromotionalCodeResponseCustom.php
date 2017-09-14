<?php

namespace uSendit\API;

class BuyCreditsWithPromotionalCodeResponseCustom
{

    /**
     * @var BuyCreditsWithPromotionalCodeResult $BuyCreditsWithPromotionalCodeResult
     */
    protected $BuyCreditsWithPromotionalCodeResult = null;

    /**
     * @param BuyCreditsWithPromotionalCodeResult $BuyCreditsWithPromotionalCodeResult
     */
    public function __construct($BuyCreditsWithPromotionalCodeResult)
    {
      $this->BuyCreditsWithPromotionalCodeResult = $BuyCreditsWithPromotionalCodeResult;
    }

    /**
     * @return BuyCreditsWithPromotionalCodeResult
     */
    public function getBuyCreditsWithPromotionalCodeResult()
    {
      return $this->BuyCreditsWithPromotionalCodeResult;
    }

    /**
     * @param BuyCreditsWithPromotionalCodeResult $BuyCreditsWithPromotionalCodeResult
     * @return \uSendit\API\BuyCreditsWithPromotionalCodeResponse
     */
    public function setBuyCreditsWithPromotionalCodeResult($BuyCreditsWithPromotionalCodeResult)
    {
      $this->BuyCreditsWithPromotionalCodeResult = $BuyCreditsWithPromotionalCodeResult;
      return $this;
    }

}
