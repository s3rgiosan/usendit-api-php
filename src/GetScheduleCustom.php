<?php

namespace uSendit\API;

class GetScheduleCustom
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
     * @var int $eventId
     */
    protected $eventId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $eventId
     */
    public function __construct($username, $password, $eventId)
    {
      $this->username = $username;
      $this->password = $password;
      $this->eventId = $eventId;
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
     * @return \uSendit\API\GetSchedule
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
     * @return \uSendit\API\GetSchedule
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
      return $this->eventId;
    }

    /**
     * @param int $eventId
     * @return \uSendit\API\GetSchedule
     */
    public function setEventId($eventId)
    {
      $this->eventId = $eventId;
      return $this;
    }

}
