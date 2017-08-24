<?php

namespace uSendit\API;

class CreateAccountResponse
{

    /**
     * @var CreateAccountResult $CreateAccountResult
     */
    protected $CreateAccountResult = null;

    /**
     * @param CreateAccountResult $CreateAccountResult
     */
    public function __construct($CreateAccountResult)
    {
      $this->CreateAccountResult = $CreateAccountResult;
    }

    /**
     * @return CreateAccountResult
     */
    public function getCreateAccountResult()
    {
      return $this->CreateAccountResult;
    }

    /**
     * @param CreateAccountResult $CreateAccountResult
     * @return \uSendit\API\CreateAccountResponse
     */
    public function setCreateAccountResult($CreateAccountResult)
    {
      $this->CreateAccountResult = $CreateAccountResult;
      return $this;
    }

}
