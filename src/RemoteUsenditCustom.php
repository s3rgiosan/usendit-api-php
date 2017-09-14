<?php

namespace uSendit\API;

class RemoteUsenditCustom extends \BeSimple\SoapClient\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SmsCharCounter' => 'uSendit\\API\\SmsCharCounterCustom',
      'SmsCharCounterResponse' => 'uSendit\\API\\SmsCharCounterResponseCustom',
      'CharactersCountResult' => 'uSendit\\API\\CharactersCountResultCustom',
      'SendMessages' => 'uSendit\\API\\SendMessagesCustom',
      'ArrayOfSms' => 'uSendit\\API\\ArrayOfSmsCustom',
      'Sms' => 'uSendit\\API\\SmsCustom',
      'SendMessagesResponse' => 'uSendit\\API\\SendMessagesResponseCustom',
      'ScheduleResult' => 'uSendit\\API\\ScheduleResultCustom',
      'ArrayOfSmsScheduled' => 'uSendit\\API\\ArrayOfSmsScheduledCustom',
      'SmsScheduled' => 'uSendit\\API\\SmsScheduledCustom',
      'CreateAccount' => 'uSendit\\API\\CreateAccountCustom',
      'NewAccount' => 'uSendit\\API\\NewAccountCustom',
      'InvoiceInfo' => 'uSendit\\API\\InvoiceInfoCustom',
      'CreateAccountResponse' => 'uSendit\\API\\CreateAccountResponseCustom',
      'CreateAccountResult' => 'uSendit\\API\\CreateAccountResultCustom',
      'ResendConfirmationCode' => 'uSendit\\API\\ResendConfirmationCodeCustom',
      'ResendConfirmationCodeResponse' => 'uSendit\\API\\ResendConfirmationCodeResponseCustom',
      'ResendConfirmationCodeResult' => 'uSendit\\API\\ResendConfirmationCodeResultCustom',
      'ConfirmAccount' => 'uSendit\\API\\ConfirmAccountCustom',
      'ConfirmAccountResponse' => 'uSendit\\API\\ConfirmAccountResponseCustom',
      'ConfirmAccountResult' => 'uSendit\\API\\ConfirmAccountResultCustom',
      'GetCredits' => 'uSendit\\API\\GetCreditsCustom',
      'GetCreditsResponse' => 'uSendit\\API\\GetCreditsResponseCustom',
      'GetCreditsResult' => 'uSendit\\API\\GetCreditsResultCustom',
      'GetCreditPacks' => 'uSendit\\API\\GetCreditPacksCustom',
      'GetCreditPacksResponse' => 'uSendit\\API\\GetCreditPacksResponseCustom',
      'GetCreditPacksResult' => 'uSendit\\API\\GetCreditPacksResultCustom',
      'ArrayOfPack' => 'uSendit\\API\\ArrayOfPackCustom',
      'Pack' => 'uSendit\\API\\PackCustom',
      'BuyCredits' => 'uSendit\\API\\BuyCreditsCustom',
      'BuyCreditsResponse' => 'uSendit\\API\\BuyCreditsResponseCustom',
      'BuyCreditsResult' => 'uSendit\\API\\BuyCreditsResultCustom',
      'BuyCreditsWithPromotionalCode' => 'uSendit\\API\\BuyCreditsWithPromotionalCodeCustom',
      'BuyCreditsWithPromotionalCodeResponse' => 'uSendit\\API\\BuyCreditsWithPromotionalCodeResponseCustom',
      'BuyCreditsWithPromotionalCodeResult' => 'uSendit\\API\\BuyCreditsWithPromotionalCodeResultCustom',
      'GetSchedule' => 'uSendit\\API\\GetScheduleCustom',
      'GetScheduleResponse' => 'uSendit\\API\\GetScheduleResponseCustom',
      'GetScheduleResult' => 'uSendit\\API\\GetScheduleResultCustom',
      'GetPartnerEvents' => 'uSendit\\API\\GetPartnerEventsCustom',
      'GetPartnerEventsResponse' => 'uSendit\\API\\GetPartnerEventsResponseCustom',
      'GetPartnerEventsResult' => 'uSendit\\API\\GetPartnerEventsResultCustom',
      'ArrayOfPartnerEvent' => 'uSendit\\API\\ArrayOfPartnerEventCustom',
      'PartnerEvent' => 'uSendit\\API\\PartnerEventCustom',
      'AuthenticateUser' => 'uSendit\\API\\AuthenticateUserCustom',
      'AuthenticateUserResponse' => 'uSendit\\API\\AuthenticateUserResponseCustom',
      'AuthenticateResult' => 'uSendit\\API\\AuthenticateResultCustom',
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
     * @param SmsCharCounterCustom $parameters
     * @return SmsCharCounterResponse
     */
    public function SmsCharCounter($parameters)
    {
      return $this->__soapCall('SmsCharCounter', array($parameters));
    }

    /**
     * Schedule SMSs to one or more msisdns allowing distinct message text per contact
     *
     * @param SendMessagesCustom $parameters
     * @return SendMessagesResponse
     */
    public function SendMessages($parameters)
    {
      return $this->__soapCall('SendMessages', array($parameters));
    }

    /**
     * Enables the creation of a new account
     *
     * @param CreateAccountCustom $parameters
     * @return CreateAccountResponse
     */
    public function CreateAccount($parameters)
    {
      return $this->__soapCall('CreateAccount', array($parameters));
    }

    /**
     * Resends SMS confirmation code
     *
     * @param ResendConfirmationCodeCustom $parameters
     * @return ResendConfirmationCodeResponse
     */
    public function ResendConfirmationCode($parameters)
    {
      return $this->__soapCall('ResendConfirmationCode', array($parameters));
    }

    /**
     * Enables account registration confirmation using SMS code
     *
     * @param ConfirmAccountCustom $parameters
     * @return ConfirmAccountResponse
     */
    public function ConfirmAccount($parameters)
    {
      return $this->__soapCall('ConfirmAccount', array($parameters));
    }

    /**
     * Get user's credits
     *
     * @param GetCreditsCustom $parameters
     * @return GetCreditsResponse
     */
    public function GetCredits($parameters)
    {
      return $this->__soapCall('GetCredits', array($parameters));
    }

    /**
     * Get the credits packs available
     *
     * @param GetCreditPacksCustom $parameters
     * @return GetCreditPacksResponse
     */
    public function GetCreditPacks($parameters)
    {
      return $this->__soapCall('GetCreditPacks', array($parameters));
    }

    /**
     * Buy credits of a specific pack
     *
     * @param BuyCreditsCustom $parameters
     * @return BuyCreditsResponse
     */
    public function BuyCredits($parameters)
    {
      return $this->__soapCall('BuyCredits', array($parameters));
    }

    /**
     * Buy credits of a specific pack with promotional code
     *
     * @param BuyCreditsWithPromotionalCodeCustom $parameters
     * @return BuyCreditsWithPromotionalCodeResponse
     */
    public function BuyCreditsWithPromotionalCode($parameters)
    {
      return $this->__soapCall('BuyCreditsWithPromotionalCode', array($parameters));
    }

    /**
     * Gets information about a schedule
     *
     * @param GetScheduleCustom $parameters
     * @return GetScheduleResponse
     */
    public function GetSchedule($parameters)
    {
      return $this->__soapCall('GetSchedule', array($parameters));
    }

    /**
     * Gets the events associated with a given partnerEventId
     *
     * @param GetPartnerEventsCustom $parameters
     * @return GetPartnerEventsResponse
     */
    public function GetPartnerEvents($parameters)
    {
      return $this->__soapCall('GetPartnerEvents', array($parameters));
    }

    /**
     * Authenticates a user
     *
     * @param AuthenticateUserCustom $parameters
     * @return AuthenticateUserResponse
     */
    public function AuthenticateUser($parameters)
    {
      return $this->__soapCall('AuthenticateUser', array($parameters));
    }

}
