<?php


 function autoload_60d711390acce8cb0ca2fd5ef2c70615($class)
{
    $classes = array(
        'uSendit\API\RemoteUsenditCustom' => __DIR__ .'/RemoteUsenditCustom.php',
        'uSendit\API\SmsCharCounterCustom' => __DIR__ .'/SmsCharCounterCustom.php',
        'uSendit\API\SmsCharCounterResponseCustom' => __DIR__ .'/SmsCharCounterResponseCustom.php',
        'uSendit\API\CharactersCountResultCustom' => __DIR__ .'/CharactersCountResultCustom.php',
        'uSendit\API\CharactersCountStatusCustom' => __DIR__ .'/CharactersCountStatusCustom.php',
        'uSendit\API\MsgEncodingCustom' => __DIR__ .'/MsgEncodingCustom.php',
        'uSendit\API\SendMessagesCustom' => __DIR__ .'/SendMessagesCustom.php',
        'uSendit\API\ArrayOfSmsCustom' => __DIR__ .'/ArrayOfSmsCustom.php',
        'uSendit\API\SmsCustom' => __DIR__ .'/SmsCustom.php',
        'uSendit\API\SendMessagesResponseCustom' => __DIR__ .'/SendMessagesResponseCustom.php',
        'uSendit\API\ScheduleResultCustom' => __DIR__ .'/ScheduleResultCustom.php',
        'uSendit\API\ScheduleStatusCustom' => __DIR__ .'/ScheduleStatusCustom.php',
        'uSendit\API\ArrayOfSmsScheduledCustom' => __DIR__ .'/ArrayOfSmsScheduledCustom.php',
        'uSendit\API\SmsScheduledCustom' => __DIR__ .'/SmsScheduledCustom.php',
        'uSendit\API\ScheduleMessageStatusCustom' => __DIR__ .'/ScheduleMessageStatusCustom.php',
        'uSendit\API\CreateAccountCustom' => __DIR__ .'/CreateAccountCustom.php',
        'uSendit\API\NewAccountCustom' => __DIR__ .'/NewAccountCustom.php',
        'uSendit\API\CountryCustom' => __DIR__ .'/CountryCustom.php',
        'uSendit\API\HowDidYouMeetUsCustom' => __DIR__ .'/HowDidYouMeetUsCustom.php',
        'uSendit\API\InvoiceInfoCustom' => __DIR__ .'/InvoiceInfoCustom.php',
        'uSendit\API\CreateAccountResponseCustom' => __DIR__ .'/CreateAccountResponseCustom.php',
        'uSendit\API\CreateAccountResultCustom' => __DIR__ .'/CreateAccountResultCustom.php',
        'uSendit\API\CreateAccountStatusCustom' => __DIR__ .'/CreateAccountStatusCustom.php',
        'uSendit\API\ResendConfirmationCodeCustom' => __DIR__ .'/ResendConfirmationCodeCustom.php',
        'uSendit\API\ResendConfirmationCodeResponseCustom' => __DIR__ .'/ResendConfirmationCodeResponseCustom.php',
        'uSendit\API\ResendConfirmationCodeResultCustom' => __DIR__ .'/ResendConfirmationCodeResultCustom.php',
        'uSendit\API\ResendConfirmationCodeStatusCustom' => __DIR__ .'/ResendConfirmationCodeStatusCustom.php',
        'uSendit\API\ConfirmAccountCustom' => __DIR__ .'/ConfirmAccountCustom.php',
        'uSendit\API\ConfirmAccountResponseCustom' => __DIR__ .'/ConfirmAccountResponseCustom.php',
        'uSendit\API\ConfirmAccountResultCustom' => __DIR__ .'/ConfirmAccountResultCustom.php',
        'uSendit\API\ConfirmAccountStatusCustom' => __DIR__ .'/ConfirmAccountStatusCustom.php',
        'uSendit\API\GetCreditsCustom' => __DIR__ .'/GetCreditsCustom.php',
        'uSendit\API\GetCreditsResponseCustom' => __DIR__ .'/GetCreditsResponseCustom.php',
        'uSendit\API\GetCreditsResultCustom' => __DIR__ .'/GetCreditsResultCustom.php',
        'uSendit\API\GetCreditsStatusCustom' => __DIR__ .'/GetCreditsStatusCustom.php',
        'uSendit\API\GetCreditPacksCustom' => __DIR__ .'/GetCreditPacksCustom.php',
        'uSendit\API\GetCreditPacksResponseCustom' => __DIR__ .'/GetCreditPacksResponseCustom.php',
        'uSendit\API\GetCreditPacksResultCustom' => __DIR__ .'/GetCreditPacksResultCustom.php',
        'uSendit\API\GetCreditPacksStatusCustom' => __DIR__ .'/GetCreditPacksStatusCustom.php',
        'uSendit\API\ArrayOfPackCustom' => __DIR__ .'/ArrayOfPackCustom.php',
        'uSendit\API\PackCustom' => __DIR__ .'/PackCustom.php',
        'uSendit\API\BuyCreditsCustom' => __DIR__ .'/BuyCreditsCustom.php',
        'uSendit\API\BuyCreditsResponseCustom' => __DIR__ .'/BuyCreditsResponseCustom.php',
        'uSendit\API\BuyCreditsResultCustom' => __DIR__ .'/BuyCreditsResultCustom.php',
        'uSendit\API\BuyCreditsStatusCustom' => __DIR__ .'/BuyCreditsStatusCustom.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeCustom' => __DIR__ .'/BuyCreditsWithPromotionalCodeCustom.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeResponseCustom' => __DIR__ .'/BuyCreditsWithPromotionalCodeResponseCustom.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeResultCustom' => __DIR__ .'/BuyCreditsWithPromotionalCodeResultCustom.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeStatusCustom' => __DIR__ .'/BuyCreditsWithPromotionalCodeStatusCustom.php',
        'uSendit\API\GetScheduleCustom' => __DIR__ .'/GetScheduleCustom.php',
        'uSendit\API\GetScheduleResponseCustom' => __DIR__ .'/GetScheduleResponseCustom.php',
        'uSendit\API\GetScheduleResultCustom' => __DIR__ .'/GetScheduleResultCustom.php',
        'uSendit\API\GetScheduleStatusCustom' => __DIR__ .'/GetScheduleStatusCustom.php',
        'uSendit\API\GetPartnerEventsCustom' => __DIR__ .'/GetPartnerEventsCustom.php',
        'uSendit\API\GetPartnerEventsResponseCustom' => __DIR__ .'/GetPartnerEventsResponseCustom.php',
        'uSendit\API\GetPartnerEventsResultCustom' => __DIR__ .'/GetPartnerEventsResultCustom.php',
        'uSendit\API\GetPartnerEventsStatusCustom' => __DIR__ .'/GetPartnerEventsStatusCustom.php',
        'uSendit\API\ArrayOfPartnerEventCustom' => __DIR__ .'/ArrayOfPartnerEventCustom.php',
        'uSendit\API\PartnerEventCustom' => __DIR__ .'/PartnerEventCustom.php',
        'uSendit\API\AuthenticateUserCustom' => __DIR__ .'/AuthenticateUserCustom.php',
        'uSendit\API\AuthenticateUserResponseCustom' => __DIR__ .'/AuthenticateUserResponseCustom.php',
        'uSendit\API\AuthenticateResultCustom' => __DIR__ .'/AuthenticateResultCustom.php',
        'uSendit\API\AuthenticateResultStatusCustom' => __DIR__ .'/AuthenticateResultStatusCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_60d711390acce8cb0ca2fd5ef2c70615');

// Do nothing. The rest is just leftovers from the code generation.
{
}
