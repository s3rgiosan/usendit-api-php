<?php

namespace uSendit\API;

class AuthenticateResult
{

    /**
     * @var AuthenticateResultStatus $AuthenticateResultStatus
     */
    protected $AuthenticateResultStatus = null;

    /**
     * @var string $AuthenticateResultMessage
     */
    protected $AuthenticateResultMessage = null;

    /**
     * @var int $UserCredits
     */
    protected $UserCredits = null;

    /**
     * @param AuthenticateResultStatus $AuthenticateResultStatus
     * @param int $UserCredits
     */
    public function __construct($AuthenticateResultStatus, $UserCredits)
    {
      $this->AuthenticateResultStatus = $AuthenticateResultStatus;
      $this->UserCredits = $UserCredits;
    }

    /**
     * @return AuthenticateResultStatus
     */
    public function getAuthenticateResultStatus()
    {
      return $this->AuthenticateResultStatus;
    }

    /**
     * @param AuthenticateResultStatus $AuthenticateResultStatus
     * @return \uSendit\API\AuthenticateResult
     */
    public function setAuthenticateResultStatus($AuthenticateResultStatus)
    {
      $this->AuthenticateResultStatus = $AuthenticateResultStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticateResultMessage()
    {
      return $this->AuthenticateResultMessage;
    }

    /**
     * @param string $AuthenticateResultMessage
     * @return \uSendit\API\AuthenticateResult
     */
    public function setAuthenticateResultMessage($AuthenticateResultMessage)
    {
      $this->AuthenticateResultMessage = $AuthenticateResultMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCredits()
    {
      return $this->UserCredits;
    }

    /**
     * @param int $UserCredits
     * @return \uSendit\API\AuthenticateResult
     */
    public function setUserCredits($UserCredits)
    {
      $this->UserCredits = $UserCredits;
      return $this;
    }

}
