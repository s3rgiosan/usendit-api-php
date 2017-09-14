<?php

namespace uSendit\API;

class GetCreditsResultCustom
{

    /**
     * @var GetCreditsStatus $GetCreditsStatus
     */
    protected $GetCreditsStatus = null;

    /**
     * @var string $GetCreditsMessage
     */
    protected $GetCreditsMessage = null;

    /**
     * @var int $Credits
     */
    protected $Credits = null;

    /**
     * @param GetCreditsStatus $GetCreditsStatus
     */
    public function __construct($GetCreditsStatus)
    {
      $this->GetCreditsStatus = $GetCreditsStatus;
    }

    /**
     * @return GetCreditsStatus
     */
    public function getGetCreditsStatus()
    {
      return $this->GetCreditsStatus;
    }

    /**
     * @param GetCreditsStatus $GetCreditsStatus
     * @return \uSendit\API\GetCreditsResult
     */
    public function setGetCreditsStatus($GetCreditsStatus)
    {
      $this->GetCreditsStatus = $GetCreditsStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGetCreditsMessage()
    {
      return $this->GetCreditsMessage;
    }

    /**
     * @param string $GetCreditsMessage
     * @return \uSendit\API\GetCreditsResult
     */
    public function setGetCreditsMessage($GetCreditsMessage)
    {
      $this->GetCreditsMessage = $GetCreditsMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getCredits()
    {
      return $this->Credits;
    }

    /**
     * @param int $Credits
     * @return \uSendit\API\GetCreditsResult
     */
    public function setCredits($Credits)
    {
      $this->Credits = $Credits;
      return $this;
    }

}
