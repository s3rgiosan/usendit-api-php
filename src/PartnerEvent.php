<?php

namespace uSendit\API;

class PartnerEvent
{

    /**
     * @var string $PartnerEventId
     */
    protected $PartnerEventId = null;

    /**
     * @var int $EventId
     */
    protected $EventId = null;

    /**
     * @param int $EventId
     */
    public function __construct($EventId)
    {
      $this->EventId = $EventId;
    }

    /**
     * @return string
     */
    public function getPartnerEventId()
    {
      return $this->PartnerEventId;
    }

    /**
     * @param string $PartnerEventId
     * @return \uSendit\API\PartnerEvent
     */
    public function setPartnerEventId($PartnerEventId)
    {
      $this->PartnerEventId = $PartnerEventId;
      return $this;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
      return $this->EventId;
    }

    /**
     * @param int $EventId
     * @return \uSendit\API\PartnerEvent
     */
    public function setEventId($EventId)
    {
      $this->EventId = $EventId;
      return $this;
    }

}
