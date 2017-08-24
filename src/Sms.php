<?php

namespace uSendit\API;

class Sms
{

    /**
     * @var string $PartnerMsgId
     */
    protected $PartnerMsgId = null;

    /**
     * @var string $Sender
     */
    protected $Sender = null;

    /**
     * @var string $Msisdn
     */
    protected $Msisdn = null;

    /**
     * @var int $MobileOperator
     */
    protected $MobileOperator = null;

    /**
     * @var \DateTime $ExpirationDatetime
     */
    protected $ExpirationDatetime = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var string $MessageText
     */
    protected $MessageText = null;

    /**
     * @var \DateTime $ScheduleDatetime
     */
    protected $ScheduleDatetime = null;

    /**
     * @var \DateTime $BeginTime
     */
    protected $BeginTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var boolean $WorkingDays
     */
    protected $WorkingDays = null;

    /**
     * @var boolean $IsFlash
     */
    protected $IsFlash = null;

    /**
     * @param int $Priority
     * @param boolean $WorkingDays
     * @param boolean $IsFlash
     */
    public function __construct($Priority, $WorkingDays, $IsFlash)
    {
      $this->Priority = $Priority;
      $this->WorkingDays = $WorkingDays;
      $this->IsFlash = $IsFlash;
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
     * @return \uSendit\API\Sms
     */
    public function setPartnerMsgId($PartnerMsgId)
    {
      $this->PartnerMsgId = $PartnerMsgId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSender()
    {
      return $this->Sender;
    }

    /**
     * @param string $Sender
     * @return \uSendit\API\Sms
     */
    public function setSender($Sender)
    {
      $this->Sender = $Sender;
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
     * @return \uSendit\API\Sms
     */
    public function setMsisdn($Msisdn)
    {
      $this->Msisdn = $Msisdn;
      return $this;
    }

    /**
     * @return int
     */
    public function getMobileOperator()
    {
      return $this->MobileOperator;
    }

    /**
     * @param int $MobileOperator
     * @return \uSendit\API\Sms
     */
    public function setMobileOperator($MobileOperator)
    {
      $this->MobileOperator = $MobileOperator;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDatetime()
    {
      if ($this->ExpirationDatetime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDatetime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDatetime
     * @return \uSendit\API\Sms
     */
    public function setExpirationDatetime(\DateTime $ExpirationDatetime = null)
    {
      if ($ExpirationDatetime == null) {
       $this->ExpirationDatetime = null;
      } else {
        $this->ExpirationDatetime = $ExpirationDatetime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \uSendit\API\Sms
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->MessageText;
    }

    /**
     * @param string $MessageText
     * @return \uSendit\API\Sms
     */
    public function setMessageText($MessageText)
    {
      $this->MessageText = $MessageText;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleDatetime()
    {
      if ($this->ScheduleDatetime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduleDatetime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduleDatetime
     * @return \uSendit\API\Sms
     */
    public function setScheduleDatetime(\DateTime $ScheduleDatetime = null)
    {
      if ($ScheduleDatetime == null) {
       $this->ScheduleDatetime = null;
      } else {
        $this->ScheduleDatetime = $ScheduleDatetime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginTime()
    {
      if ($this->BeginTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginTime
     * @return \uSendit\API\Sms
     */
    public function setBeginTime(\DateTime $BeginTime = null)
    {
      if ($BeginTime == null) {
       $this->BeginTime = null;
      } else {
        $this->BeginTime = $BeginTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \uSendit\API\Sms
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWorkingDays()
    {
      return $this->WorkingDays;
    }

    /**
     * @param boolean $WorkingDays
     * @return \uSendit\API\Sms
     */
    public function setWorkingDays($WorkingDays)
    {
      $this->WorkingDays = $WorkingDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFlash()
    {
      return $this->IsFlash;
    }

    /**
     * @param boolean $IsFlash
     * @return \uSendit\API\Sms
     */
    public function setIsFlash($IsFlash)
    {
      $this->IsFlash = $IsFlash;
      return $this;
    }

}
