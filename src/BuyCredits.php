<?php

namespace uSendit\API;

class BuyCredits
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
     * @var int $packId
     */
    protected $packId = null;

    /**
     * @var string $caller
     */
    protected $caller = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $packId
     * @param string $caller
     */
    public function __construct($username, $password, $packId, $caller)
    {
      $this->username = $username;
      $this->password = $password;
      $this->packId = $packId;
      $this->caller = $caller;
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
     * @return \uSendit\API\BuyCredits
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
     * @return \uSendit\API\BuyCredits
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackId()
    {
      return $this->packId;
    }

    /**
     * @param int $packId
     * @return \uSendit\API\BuyCredits
     */
    public function setPackId($packId)
    {
      $this->packId = $packId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaller()
    {
      return $this->caller;
    }

    /**
     * @param string $caller
     * @return \uSendit\API\BuyCredits
     */
    public function setCaller($caller)
    {
      $this->caller = $caller;
      return $this;
    }

}
