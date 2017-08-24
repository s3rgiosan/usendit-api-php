<?php

namespace uSendit\API;

class GetPartnerEventsResult
{

    /**
     * @var GetPartnerEventsStatus $PartnerEventsStatus
     */
    protected $PartnerEventsStatus = null;

    /**
     * @var string $ScheduleMessage
     */
    protected $ScheduleMessage = null;

    /**
     * @var ArrayOfPartnerEvent $PartnerEvents
     */
    protected $PartnerEvents = null;

    /**
     * @param GetPartnerEventsStatus $PartnerEventsStatus
     */
    public function __construct($PartnerEventsStatus)
    {
      $this->PartnerEventsStatus = $PartnerEventsStatus;
    }

    /**
     * @return GetPartnerEventsStatus
     */
    public function getPartnerEventsStatus()
    {
      return $this->PartnerEventsStatus;
    }

    /**
     * @param GetPartnerEventsStatus $PartnerEventsStatus
     * @return \uSendit\API\GetPartnerEventsResult
     */
    public function setPartnerEventsStatus($PartnerEventsStatus)
    {
      $this->PartnerEventsStatus = $PartnerEventsStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduleMessage()
    {
      return $this->ScheduleMessage;
    }

    /**
     * @param string $ScheduleMessage
     * @return \uSendit\API\GetPartnerEventsResult
     */
    public function setScheduleMessage($ScheduleMessage)
    {
      $this->ScheduleMessage = $ScheduleMessage;
      return $this;
    }

    /**
     * @return ArrayOfPartnerEvent
     */
    public function getPartnerEvents()
    {
      return $this->PartnerEvents;
    }

    /**
     * @param ArrayOfPartnerEvent $PartnerEvents
     * @return \uSendit\API\GetPartnerEventsResult
     */
    public function setPartnerEvents($PartnerEvents)
    {
      $this->PartnerEvents = $PartnerEvents;
      return $this;
    }

}
