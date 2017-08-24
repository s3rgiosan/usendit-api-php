<?php

namespace uSendit\API;

class SendMessagesResponse
{

    /**
     * @var ScheduleResult $SendMessagesResult
     */
    protected $SendMessagesResult = null;

    /**
     * @param ScheduleResult $SendMessagesResult
     */
    public function __construct($SendMessagesResult)
    {
      $this->SendMessagesResult = $SendMessagesResult;
    }

    /**
     * @return ScheduleResult
     */
    public function getSendMessagesResult()
    {
      return $this->SendMessagesResult;
    }

    /**
     * @param ScheduleResult $SendMessagesResult
     * @return \uSendit\API\SendMessagesResponse
     */
    public function setSendMessagesResult($SendMessagesResult)
    {
      $this->SendMessagesResult = $SendMessagesResult;
      return $this;
    }

}
