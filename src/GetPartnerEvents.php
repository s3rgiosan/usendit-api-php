<?php

namespace uSendit\API;

class GetPartnerEvents
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
     * @var string $partnerEventId
     */
    protected $partnerEventId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $partnerEventId
     */
    public function __construct($username, $password, $partnerEventId)
    {
      $this->username = $username;
      $this->password = $password;
      $this->partnerEventId = $partnerEventId;
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
     * @return \uSendit\API\GetPartnerEvents
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
     * @return \uSendit\API\GetPartnerEvents
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerEventId()
    {
      return $this->partnerEventId;
    }

    /**
     * @param string $partnerEventId
     * @return \uSendit\API\GetPartnerEvents
     */
    public function setPartnerEventId($partnerEventId)
    {
      $this->partnerEventId = $partnerEventId;
      return $this;
    }

}
