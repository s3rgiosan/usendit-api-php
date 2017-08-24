<?php

namespace uSendit\API;

class AuthenticateUserResponse
{

    /**
     * @var AuthenticateResult $AuthenticateUserResult
     */
    protected $AuthenticateUserResult = null;

    /**
     * @param AuthenticateResult $AuthenticateUserResult
     */
    public function __construct($AuthenticateUserResult)
    {
      $this->AuthenticateUserResult = $AuthenticateUserResult;
    }

    /**
     * @return AuthenticateResult
     */
    public function getAuthenticateUserResult()
    {
      return $this->AuthenticateUserResult;
    }

    /**
     * @param AuthenticateResult $AuthenticateUserResult
     * @return \uSendit\API\AuthenticateUserResponse
     */
    public function setAuthenticateUserResult($AuthenticateUserResult)
    {
      $this->AuthenticateUserResult = $AuthenticateUserResult;
      return $this;
    }

}
