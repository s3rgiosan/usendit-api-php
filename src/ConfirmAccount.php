<?php

namespace uSendit\API;

class ConfirmAccount
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $confirmationCode
     */
    protected $confirmationCode = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $confirmationCode
     */
    public function __construct($username, $password, $confirmationCode)
    {
      $this->username = $username;
      $this->password = $password;
      $this->confirmationCode = $confirmationCode;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \uSendit\API\ConfirmAccount
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \uSendit\API\ConfirmAccount
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationCode()
    {
      return $this->confirmationCode;
    }

    /**
     * @param string $confirmationCode
     * @return \uSendit\API\ConfirmAccount
     */
    public function setConfirmationCode($confirmationCode)
    {
      $this->confirmationCode = $confirmationCode;
      return $this;
    }

}
