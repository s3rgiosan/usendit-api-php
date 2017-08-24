<?php

namespace uSendit\API;

class NewAccountCustom
{

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var Country $Country
     */
    protected $Country = null;

    /**
     * @var string $Msisdn
     */
    protected $Msisdn = null;

    /**
     * @var HowDidYouMeetUs $HowDidYouFindUs
     */
    protected $HowDidYouFindUs = null;

    /**
     * @var boolean $AllowMarketingCampaigns
     */
    protected $AllowMarketingCampaigns = null;

    /**
     * @var string $Sender
     */
    protected $Sender = null;

    /**
     * @param Country $Country
     * @param HowDidYouMeetUs $HowDidYouFindUs
     * @param boolean $AllowMarketingCampaigns
     */
    public function __construct($Country, $HowDidYouFindUs, $AllowMarketingCampaigns)
    {
      $this->Country = $Country;
      $this->HowDidYouFindUs = $HowDidYouFindUs;
      $this->AllowMarketingCampaigns = $AllowMarketingCampaigns;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \uSendit\API\NewAccount
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \uSendit\API\NewAccount
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \uSendit\API\NewAccount
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \uSendit\API\NewAccount
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return \uSendit\API\NewAccount
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \uSendit\API\NewAccount
     */
    public function setMsisdn($Msisdn)
    {
      $this->Msisdn = $Msisdn;
      return $this;
    }

    /**
     * @return HowDidYouMeetUs
     */
    public function getHowDidYouFindUs()
    {
      return $this->HowDidYouFindUs;
    }

    /**
     * @param HowDidYouMeetUs $HowDidYouFindUs
     * @return \uSendit\API\NewAccount
     */
    public function setHowDidYouFindUs($HowDidYouFindUs)
    {
      $this->HowDidYouFindUs = $HowDidYouFindUs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMarketingCampaigns()
    {
      return $this->AllowMarketingCampaigns;
    }

    /**
     * @param boolean $AllowMarketingCampaigns
     * @return \uSendit\API\NewAccount
     */
    public function setAllowMarketingCampaigns($AllowMarketingCampaigns)
    {
      $this->AllowMarketingCampaigns = $AllowMarketingCampaigns;
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
     * @return \uSendit\API\NewAccount
     */
    public function setSender($Sender)
    {
      $this->Sender = $Sender;
      return $this;
    }

}
