<?php

namespace uSendit\API;

class GetScheduleResultCustom
{

    /**
     * @var GetScheduleStatus $ScheduleStatus
     */
    protected $ScheduleStatus = null;

    /**
     * @var string $ScheduleMessage
     */
    protected $ScheduleMessage = null;

    /**
     * @var int $EventId
     */
    protected $EventId = null;

    /**
     * @var string $PartnerEventId
     */
    protected $PartnerEventId = null;

    /**
     * @var int $TotalScheduledSMS
     */
    protected $TotalScheduledSMS = null;

    /**
     * @var int $TotalRecipients
     */
    protected $TotalRecipients = null;

    /**
     * @var int $AcceptedRecipients
     */
    protected $AcceptedRecipients = null;

    /**
     * @var int $RejectedRecipients
     */
    protected $RejectedRecipients = null;

    /**
     * @var int $CreditsSpent
     */
    protected $CreditsSpent = null;

    /**
     * @var ArrayOfSmsScheduled $SmsScheduledList
     */
    protected $SmsScheduledList = null;

    /**
     * @param GetScheduleStatus $ScheduleStatus
     * @param int $EventId
     * @param int $TotalScheduledSMS
     * @param int $TotalRecipients
     * @param int $AcceptedRecipients
     * @param int $RejectedRecipients
     * @param int $CreditsSpent
     */
    public function __construct($ScheduleStatus, $EventId, $TotalScheduledSMS, $TotalRecipients, $AcceptedRecipients, $RejectedRecipients, $CreditsSpent)
    {
      $this->ScheduleStatus = $ScheduleStatus;
      $this->EventId = $EventId;
      $this->TotalScheduledSMS = $TotalScheduledSMS;
      $this->TotalRecipients = $TotalRecipients;
      $this->AcceptedRecipients = $AcceptedRecipients;
      $this->RejectedRecipients = $RejectedRecipients;
      $this->CreditsSpent = $CreditsSpent;
    }

    /**
     * @return GetScheduleStatus
     */
    public function getScheduleStatus()
    {
      return $this->ScheduleStatus;
    }

    /**
     * @param GetScheduleStatus $ScheduleStatus
     * @return \uSendit\API\GetScheduleResult
     */
    public function setScheduleStatus($ScheduleStatus)
    {
      $this->ScheduleStatus = $ScheduleStatus;
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
     * @return \uSendit\API\GetScheduleResult
     */
    public function setScheduleMessage($ScheduleMessage)
    {
      $this->ScheduleMessage = $ScheduleMessage;
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
     * @return \uSendit\API\GetScheduleResult
     */
    public function setEventId($EventId)
    {
      $this->EventId = $EventId;
      return $this;
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
     * @return \uSendit\API\GetScheduleResult
     */
    public function setPartnerEventId($PartnerEventId)
    {
      $this->PartnerEventId = $PartnerEventId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalScheduledSMS()
    {
      return $this->TotalScheduledSMS;
    }

    /**
     * @param int $TotalScheduledSMS
     * @return \uSendit\API\GetScheduleResult
     */
    public function setTotalScheduledSMS($TotalScheduledSMS)
    {
      $this->TotalScheduledSMS = $TotalScheduledSMS;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecipients()
    {
      return $this->TotalRecipients;
    }

    /**
     * @param int $TotalRecipients
     * @return \uSendit\API\GetScheduleResult
     */
    public function setTotalRecipients($TotalRecipients)
    {
      $this->TotalRecipients = $TotalRecipients;
      return $this;
    }

    /**
     * @return int
     */
    public function getAcceptedRecipients()
    {
      return $this->AcceptedRecipients;
    }

    /**
     * @param int $AcceptedRecipients
     * @return \uSendit\API\GetScheduleResult
     */
    public function setAcceptedRecipients($AcceptedRecipients)
    {
      $this->AcceptedRecipients = $AcceptedRecipients;
      return $this;
    }

    /**
     * @return int
     */
    public function getRejectedRecipients()
    {
      return $this->RejectedRecipients;
    }

    /**
     * @param int $RejectedRecipients
     * @return \uSendit\API\GetScheduleResult
     */
    public function setRejectedRecipients($RejectedRecipients)
    {
      $this->RejectedRecipients = $RejectedRecipients;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditsSpent()
    {
      return $this->CreditsSpent;
    }

    /**
     * @param int $CreditsSpent
     * @return \uSendit\API\GetScheduleResult
     */
    public function setCreditsSpent($CreditsSpent)
    {
      $this->CreditsSpent = $CreditsSpent;
      return $this;
    }

    /**
     * @return ArrayOfSmsScheduled
     */
    public function getSmsScheduledList()
    {
      return $this->SmsScheduledList;
    }

    /**
     * @param ArrayOfSmsScheduled $SmsScheduledList
     * @return \uSendit\API\GetScheduleResult
     */
    public function setSmsScheduledList($SmsScheduledList)
    {
      $this->SmsScheduledList = $SmsScheduledList;
      return $this;
    }

}
