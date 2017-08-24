<?php

namespace uSendit\API;

class RemoteUsendit extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SmsCharCounter' => 'uSendit\\API\\SmsCharCounter',
      'SmsCharCounterResponse' => 'uSendit\\API\\SmsCharCounterResponse',
      'CharactersCountResult' => 'uSendit\\API\\CharactersCountResult',
      'SendMessages' => 'uSendit\\API\\SendMessages',
      'ArrayOfSms' => 'uSendit\\API\\ArrayOfSms',
      'Sms' => 'uSendit\\API\\Sms',
      'SendMessagesResponse' => 'uSendit\\API\\SendMessagesResponse',
      'ScheduleResult' => 'uSendit\\API\\ScheduleResult',
      'ArrayOfSmsScheduled' => 'uSendit\\API\\ArrayOfSmsScheduled',
      'SmsScheduled' => 'uSendit\\API\\SmsScheduled',
      'CreateAccount' => 'uSendit\\API\\CreateAccount',
      'NewAccount' => 'uSendit\\API\\NewAccount',
      'InvoiceInfo' => 'uSendit\\API\\InvoiceInfo',
      'CreateAccountResponse' => 'uSendit\\API\\CreateAccountResponse',
      'CreateAccountResult' => 'uSendit\\API\\CreateAccountResult',
      'ResendConfirmationCode' => 'uSendit\\API\\ResendConfirmationCode',
      'ResendConfirmationCodeResponse' => 'uSendit\\API\\ResendConfirmationCodeResponse',
      'ResendConfirmationCodeResult' => 'uSendit\\API\\ResendConfirmationCodeResult',
      'ConfirmAccount' => 'uSendit\\API\\ConfirmAccount',
      'ConfirmAccountResponse' => 'uSendit\\API\\ConfirmAccountResponse',
      'ConfirmAccountResult' => 'uSendit\\API\\ConfirmAccountResult',
      'GetCredits' => 'uSendit\\API\\GetCredits',
      'GetCreditsResponse' => 'uSendit\\API\\GetCreditsResponse',
      'GetCreditsResult' => 'uSendit\\API\\GetCreditsResult',
      'GetCreditPacks' => 'uSendit\\API\\GetCreditPacks',
      'GetCreditPacksResponse' => 'uSendit\\API\\GetCreditPacksResponse',
      'GetCreditPacksResult' => 'uSendit\\API\\GetCreditPacksResult',
      'ArrayOfPack' => 'uSendit\\API\\ArrayOfPack',
      'Pack' => 'uSendit\\API\\Pack',
      'BuyCredits' => 'uSendit\\API\\BuyCredits',
      'BuyCreditsResponse' => 'uSendit\\API\\BuyCreditsResponse',
      'BuyCreditsResult' => 'uSendit\\API\\BuyCreditsResult',
      'BuyCreditsWithPromotionalCode' => 'uSendit\\API\\BuyCreditsWithPromotionalCode',
      'BuyCreditsWithPromotionalCodeResponse' => 'uSendit\\API\\BuyCreditsWithPromotionalCodeResponse',
      'BuyCreditsWithPromotionalCodeResult' => 'uSendit\\API\\BuyCreditsWithPromotionalCodeResult',
      'GetSchedule' => 'uSendit\\API\\GetSchedule',
      'GetScheduleResponse' => 'uSendit\\API\\GetScheduleResponse',
      'GetScheduleResult' => 'uSendit\\API\\GetScheduleResult',
      'GetPartnerEvents' => 'uSendit\\API\\GetPartnerEvents',
      'GetPartnerEventsResponse' => 'uSendit\\API\\GetPartnerEventsResponse',
      'GetPartnerEventsResult' => 'uSendit\\API\\GetPartnerEventsResult',
      'ArrayOfPartnerEvent' => 'uSendit\\API\\ArrayOfPartnerEvent',
      'PartnerEvent' => 'uSendit\\API\\PartnerEvent',
      'AuthenticateUser' => 'uSendit\\API\\AuthenticateUser',
      'AuthenticateUserResponse' => 'uSendit\\API\\AuthenticateUserResponse',
      'AuthenticateResult' => 'uSendit\\API\\AuthenticateResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.usendit.pt/v1/remoteusendit.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Count the number of characteres of a SMS text
     *
     * @param SmsCharCounter $parameters
     * @return SmsCharCounterResponse
     */
    public function SmsCharCounter(SmsCharCounter $parameters)
    {
      return $this->__soapCall('SmsCharCounter', array($parameters));
    }

    /**
     * Schedule SMSs to one or more msisdns allowing distinct message text per contact
     *
     * @param SendMessages $parameters
     * @return SendMessagesResponse
     */
    public function SendMessages(SendMessages $parameters)
    {
      return $this->__soapCall('SendMessages', array($parameters));
    }

    /**
     * Enables the creation of a new account
     *
     * @param CreateAccount $parameters
     * @return CreateAccountResponse
     */
    public function CreateAccount(CreateAccount $parameters)
    {
      return $this->__soapCall('CreateAccount', array($parameters));
    }

    /**
     * Resends SMS confirmation code
     *
     * @param ResendConfirmationCode $parameters
     * @return ResendConfirmationCodeResponse
     */
    public function ResendConfirmationCode(ResendConfirmationCode $parameters)
    {
      return $this->__soapCall('ResendConfirmationCode', array($parameters));
    }

    /**
     * Enables account registration confirmation using SMS code
     *
     * @param ConfirmAccount $parameters
     * @return ConfirmAccountResponse
     */
    public function ConfirmAccount(ConfirmAccount $parameters)
    {
      return $this->__soapCall('ConfirmAccount', array($parameters));
    }

    /**
     * Get user's credits
     *
     * @param GetCredits $parameters
     * @return GetCreditsResponse
     */
    public function GetCredits(GetCredits $parameters)
    {
      return $this->__soapCall('GetCredits', array($parameters));
    }

    /**
     * Get the credits packs available
     *
     * @param GetCreditPacks $parameters
     * @return GetCreditPacksResponse
     */
    public function GetCreditPacks(GetCreditPacks $parameters)
    {
      return $this->__soapCall('GetCreditPacks', array($parameters));
    }

    /**
     * Buy credits of a specific pack
     *
     * @param BuyCredits $parameters
     * @return BuyCreditsResponse
     */
    public function BuyCredits(BuyCredits $parameters)
    {
      return $this->__soapCall('BuyCredits', array($parameters));
    }

    /**
     * Buy credits of a specific pack with promotional code
     *
     * @param BuyCreditsWithPromotionalCode $parameters
     * @return BuyCreditsWithPromotionalCodeResponse
     */
    public function BuyCreditsWithPromotionalCode(BuyCreditsWithPromotionalCode $parameters)
    {
      return $this->__soapCall('BuyCreditsWithPromotionalCode', array($parameters));
    }

    /**
     * Gets information about a schedule
     *
     * @param GetSchedule $parameters
     * @return GetScheduleResponse
     */
    public function GetSchedule(GetSchedule $parameters)
    {
      return $this->__soapCall('GetSchedule', array($parameters));
    }

    /**
     * Gets the events associated with a given partnerEventId
     *
     * @param GetPartnerEvents $parameters
     * @return GetPartnerEventsResponse
     */
    public function GetPartnerEvents(GetPartnerEvents $parameters)
    {
      return $this->__soapCall('GetPartnerEvents', array($parameters));
    }

    /**
     * Authenticates a user
     *
     * @param AuthenticateUser $parameters
     * @return AuthenticateUserResponse
     */
    public function AuthenticateUser(AuthenticateUser $parameters)
    {
      return $this->__soapCall('AuthenticateUser', array($parameters));
    }

}
