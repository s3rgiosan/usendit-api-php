<?php

namespace uSendit\API;

class ConfirmAccountResponse
{

    /**
     * @var ConfirmAccountResult $ConfirmAccountResult
     */
    protected $ConfirmAccountResult = null;

    /**
     * @param ConfirmAccountResult $ConfirmAccountResult
     */
    public function __construct($ConfirmAccountResult)
    {
      $this->ConfirmAccountResult = $ConfirmAccountResult;
    }

    /**
     * @return ConfirmAccountResult
     */
    public function getConfirmAccountResult()
    {
      return $this->ConfirmAccountResult;
    }

    /**
     * @param ConfirmAccountResult $ConfirmAccountResult
     * @return \uSendit\API\ConfirmAccountResponse
     */
    public function setConfirmAccountResult($ConfirmAccountResult)
    {
      $this->ConfirmAccountResult = $ConfirmAccountResult;
      return $this;
    }

}
