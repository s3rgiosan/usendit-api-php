<?php

namespace uSendit\API;

class CreateAccountResult
{

    /**
     * @var CreateAccountStatus $CreateAccountStatus
     */
    protected $CreateAccountStatus = null;

    /**
     * @var string $CreateAccountMessage
     */
    protected $CreateAccountMessage = null;

    /**
     * @var string $VerificationKey
     */
    protected $VerificationKey = null;

    /**
     * @param CreateAccountStatus $CreateAccountStatus
     */
    public function __construct($CreateAccountStatus)
    {
      $this->CreateAccountStatus = $CreateAccountStatus;
    }

    /**
     * @return CreateAccountStatus
     */
    public function getCreateAccountStatus()
    {
      return $this->CreateAccountStatus;
    }

    /**
     * @param CreateAccountStatus $CreateAccountStatus
     * @return \uSendit\API\CreateAccountResult
     */
    public function setCreateAccountStatus($CreateAccountStatus)
    {
      $this->CreateAccountStatus = $CreateAccountStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreateAccountMessage()
    {
      return $this->CreateAccountMessage;
    }

    /**
     * @param string $CreateAccountMessage
     * @return \uSendit\API\CreateAccountResult
     */
    public function setCreateAccountMessage($CreateAccountMessage)
    {
      $this->CreateAccountMessage = $CreateAccountMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerificationKey()
    {
      return $this->VerificationKey;
    }

    /**
     * @param string $VerificationKey
     * @return \uSendit\API\CreateAccountResult
     */
    public function setVerificationKey($VerificationKey)
    {
      $this->VerificationKey = $VerificationKey;
      return $this;
    }

}
