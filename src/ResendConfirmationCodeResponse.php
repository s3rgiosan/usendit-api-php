<?php

namespace uSendit\API;

class ResendConfirmationCodeResponse
{

    /**
     * @var ResendConfirmationCodeResult $ResendConfirmationCodeResult
     */
    protected $ResendConfirmationCodeResult = null;

    /**
     * @param ResendConfirmationCodeResult $ResendConfirmationCodeResult
     */
    public function __construct($ResendConfirmationCodeResult)
    {
      $this->ResendConfirmationCodeResult = $ResendConfirmationCodeResult;
    }

    /**
     * @return ResendConfirmationCodeResult
     */
    public function getResendConfirmationCodeResult()
    {
      return $this->ResendConfirmationCodeResult;
    }

    /**
     * @param ResendConfirmationCodeResult $ResendConfirmationCodeResult
     * @return \uSendit\API\ResendConfirmationCodeResponse
     */
    public function setResendConfirmationCodeResult($ResendConfirmationCodeResult)
    {
      $this->ResendConfirmationCodeResult = $ResendConfirmationCodeResult;
      return $this;
    }

}
