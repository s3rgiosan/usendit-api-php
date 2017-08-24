<?php

namespace uSendit\API;

class ConfirmAccountResult
{

    /**
     * @var ConfirmAccountStatus $ConfirmAccountStatus
     */
    protected $ConfirmAccountStatus = null;

    /**
     * @var string $ConfirmAccountMessage
     */
    protected $ConfirmAccountMessage = null;

    /**
     * @param ConfirmAccountStatus $ConfirmAccountStatus
     */
    public function __construct($ConfirmAccountStatus)
    {
      $this->ConfirmAccountStatus = $ConfirmAccountStatus;
    }

    /**
     * @return ConfirmAccountStatus
     */
    public function getConfirmAccountStatus()
    {
      return $this->ConfirmAccountStatus;
    }

    /**
     * @param ConfirmAccountStatus $ConfirmAccountStatus
     * @return \uSendit\API\ConfirmAccountResult
     */
    public function setConfirmAccountStatus($ConfirmAccountStatus)
    {
      $this->ConfirmAccountStatus = $ConfirmAccountStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmAccountMessage()
    {
      return $this->ConfirmAccountMessage;
    }

    /**
     * @param string $ConfirmAccountMessage
     * @return \uSendit\API\ConfirmAccountResult
     */
    public function setConfirmAccountMessage($ConfirmAccountMessage)
    {
      $this->ConfirmAccountMessage = $ConfirmAccountMessage;
      return $this;
    }

}
