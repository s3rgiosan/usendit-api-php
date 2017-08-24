<?php

namespace uSendit\API;

class SmsCharCounter
{

    /**
     * @var string $messageText
     */
    protected $messageText = null;

    /**
     * @param string $messageText
     */
    public function __construct($messageText)
    {
      $this->messageText = $messageText;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->messageText;
    }

    /**
     * @param string $messageText
     * @return \uSendit\API\SmsCharCounter
     */
    public function setMessageText($messageText)
    {
      $this->messageText = $messageText;
      return $this;
    }

}
