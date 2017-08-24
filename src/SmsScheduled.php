<?php

namespace uSendit\API;

class SmsScheduled
{

    /**
     * @var int $MsgId
     */
    protected $MsgId = null;

    /**
     * @var string $PartnerMsgId
     */
    protected $PartnerMsgId = null;

    /**
     * @var string $Msisdn
     */
    protected $Msisdn = null;

    /**
     * @var ScheduleMessageStatus $ScheduleMessageStatus
     */
    protected $ScheduleMessageStatus = null;

    /**
     * @var int $NumberSMS
     */
    protected $NumberSMS = null;

    /**
     * @param int $MsgId
     * @param ScheduleMessageStatus $ScheduleMessageStatus
     * @param int $NumberSMS
     */
    public function __construct($MsgId, $ScheduleMessageStatus, $NumberSMS)
    {
      $this->MsgId = $MsgId;
      $this->ScheduleMessageStatus = $ScheduleMessageStatus;
      $this->NumberSMS = $NumberSMS;
    }

    /**
     * @return int
     */
    public function getMsgId()
    {
      return $this->MsgId;
    }

    /**
     * @param int $MsgId
     * @return \uSendit\API\SmsScheduled
     */
    public function setMsgId($MsgId)
    {
      $this->MsgId = $MsgId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerMsgId()
    {
      return $this->PartnerMsgId;
    }

    /**
     * @param string $PartnerMsgId
     * @return \uSendit\API\SmsScheduled
     */
    public function setPartnerMsgId($PartnerMsgId)
    {
      $this->PartnerMsgId = $PartnerMsgId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
      return $this->Msisdn;
    }

    /**
     * @param string $Msisdn
     * @return \uSendit\API\SmsScheduled
     */
    public function setMsisdn($Msisdn)
    {
      $this->Msisdn = $Msisdn;
      return $this;
    }

    /**
     * @return ScheduleMessageStatus
     */
    public function getScheduleMessageStatus()
    {
      return $this->ScheduleMessageStatus;
    }

    /**
     * @param ScheduleMessageStatus $ScheduleMessageStatus
     * @return \uSendit\API\SmsScheduled
     */
    public function setScheduleMessageStatus($ScheduleMessageStatus)
    {
      $this->ScheduleMessageStatus = $ScheduleMessageStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberSMS()
    {
      return $this->NumberSMS;
    }

    /**
     * @param int $NumberSMS
     * @return \uSendit\API\SmsScheduled
     */
    public function setNumberSMS($NumberSMS)
    {
      $this->NumberSMS = $NumberSMS;
      return $this;
    }

}
