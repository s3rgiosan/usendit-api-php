<?php

namespace uSendit\API;

class SendMessagesCustom
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
     * @var ArrayOfSms $smsList
     */
    protected $smsList = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $partnerEventId
     * @param ArrayOfSms $smsList
     */
    public function __construct($username, $password, $partnerEventId, $smsList)
    {
      $this->username = $username;
      $this->password = $password;
      $this->partnerEventId = $partnerEventId;
      $this->smsList = $smsList;
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
     * @return \uSendit\API\SendMessages
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
     * @return \uSendit\API\SendMessages
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
     * @return \uSendit\API\SendMessages
     */
    public function setPartnerEventId($partnerEventId)
    {
      $this->partnerEventId = $partnerEventId;
      return $this;
    }

    /**
     * @return ArrayOfSms
     */
    public function getSmsList()
    {
      return $this->smsList;
    }

    /**
     * @param ArrayOfSms $smsList
     * @return \uSendit\API\SendMessages
     */
    public function setSmsList($smsList)
    {
      $this->smsList = $smsList;
      return $this;
    }

}
