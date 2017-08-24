<?php

namespace uSendit\API;

class ResendConfirmationCodeResultCustom
{

    /**
     * @var ResendConfirmationCodeStatus $ResendConfirmationCodeStatus
     */
    protected $ResendConfirmationCodeStatus = null;

    /**
     * @var string $ResendConfirmationCodeMessage
     */
    protected $ResendConfirmationCodeMessage = null;

    /**
     * @param ResendConfirmationCodeStatus $ResendConfirmationCodeStatus
     */
    public function __construct($ResendConfirmationCodeStatus)
    {
      $this->ResendConfirmationCodeStatus = $ResendConfirmationCodeStatus;
    }

    /**
     * @return ResendConfirmationCodeStatus
     */
    public function getResendConfirmationCodeStatus()
    {
      return $this->ResendConfirmationCodeStatus;
    }

    /**
     * @param ResendConfirmationCodeStatus $ResendConfirmationCodeStatus
     * @return \uSendit\API\ResendConfirmationCodeResult
     */
    public function setResendConfirmationCodeStatus($ResendConfirmationCodeStatus)
    {
      $this->ResendConfirmationCodeStatus = $ResendConfirmationCodeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getResendConfirmationCodeMessage()
    {
      return $this->ResendConfirmationCodeMessage;
    }

    /**
     * @param string $ResendConfirmationCodeMessage
     * @return \uSendit\API\ResendConfirmationCodeResult
     */
    public function setResendConfirmationCodeMessage($ResendConfirmationCodeMessage)
    {
      $this->ResendConfirmationCodeMessage = $ResendConfirmationCodeMessage;
      return $this;
    }

}
