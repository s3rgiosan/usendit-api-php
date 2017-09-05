<?php


 function autoload_5c279b29d70bf9490140109060267e6e($class)
{
    $classes = array(
        'uSendit\API\RemoteUsendit' => __DIR__ .'/RemoteUsendit.php',
        'uSendit\API\SmsCharCounter' => __DIR__ .'/SmsCharCounter.php',
        'uSendit\API\SmsCharCounterResponse' => __DIR__ .'/SmsCharCounterResponse.php',
        'uSendit\API\CharactersCountResult' => __DIR__ .'/CharactersCountResult.php',
        'uSendit\API\CharactersCountStatus' => __DIR__ .'/CharactersCountStatus.php',
        'uSendit\API\MsgEncoding' => __DIR__ .'/MsgEncoding.php',
        'uSendit\API\SendMessages' => __DIR__ .'/SendMessages.php',
        'uSendit\API\ArrayOfSms' => __DIR__ .'/ArrayOfSms.php',
        'uSendit\API\Sms' => __DIR__ .'/Sms.php',
        'uSendit\API\SendMessagesResponse' => __DIR__ .'/SendMessagesResponse.php',
        'uSendit\API\ScheduleResult' => __DIR__ .'/ScheduleResult.php',
        'uSendit\API\ScheduleStatus' => __DIR__ .'/ScheduleStatus.php',
        'uSendit\API\ArrayOfSmsScheduled' => __DIR__ .'/ArrayOfSmsScheduled.php',
        'uSendit\API\SmsScheduled' => __DIR__ .'/SmsScheduled.php',
        'uSendit\API\ScheduleMessageStatus' => __DIR__ .'/ScheduleMessageStatus.php',
        'uSendit\API\CreateAccount' => __DIR__ .'/CreateAccount.php',
        'uSendit\API\NewAccount' => __DIR__ .'/NewAccount.php',
        'uSendit\API\Country' => __DIR__ .'/Country.php',
        'uSendit\API\HowDidYouMeetUs' => __DIR__ .'/HowDidYouMeetUs.php',
        'uSendit\API\InvoiceInfo' => __DIR__ .'/InvoiceInfo.php',
        'uSendit\API\CreateAccountResponse' => __DIR__ .'/CreateAccountResponse.php',
        'uSendit\API\CreateAccountResult' => __DIR__ .'/CreateAccountResult.php',
        'uSendit\API\CreateAccountStatus' => __DIR__ .'/CreateAccountStatus.php',
        'uSendit\API\ResendConfirmationCode' => __DIR__ .'/ResendConfirmationCode.php',
        'uSendit\API\ResendConfirmationCodeResponse' => __DIR__ .'/ResendConfirmationCodeResponse.php',
        'uSendit\API\ResendConfirmationCodeResult' => __DIR__ .'/ResendConfirmationCodeResult.php',
        'uSendit\API\ResendConfirmationCodeStatus' => __DIR__ .'/ResendConfirmationCodeStatus.php',
        'uSendit\API\ConfirmAccount' => __DIR__ .'/ConfirmAccount.php',
        'uSendit\API\ConfirmAccountResponse' => __DIR__ .'/ConfirmAccountResponse.php',
        'uSendit\API\ConfirmAccountResult' => __DIR__ .'/ConfirmAccountResult.php',
        'uSendit\API\ConfirmAccountStatus' => __DIR__ .'/ConfirmAccountStatus.php',
        'uSendit\API\GetCredits' => __DIR__ .'/GetCredits.php',
        'uSendit\API\GetCreditsResponse' => __DIR__ .'/GetCreditsResponse.php',
        'uSendit\API\GetCreditsResult' => __DIR__ .'/GetCreditsResult.php',
        'uSendit\API\GetCreditsStatus' => __DIR__ .'/GetCreditsStatus.php',
        'uSendit\API\GetCreditPacks' => __DIR__ .'/GetCreditPacks.php',
        'uSendit\API\GetCreditPacksResponse' => __DIR__ .'/GetCreditPacksResponse.php',
        'uSendit\API\GetCreditPacksResult' => __DIR__ .'/GetCreditPacksResult.php',
        'uSendit\API\GetCreditPacksStatus' => __DIR__ .'/GetCreditPacksStatus.php',
        'uSendit\API\ArrayOfPack' => __DIR__ .'/ArrayOfPack.php',
        'uSendit\API\Pack' => __DIR__ .'/Pack.php',
        'uSendit\API\BuyCredits' => __DIR__ .'/BuyCredits.php',
        'uSendit\API\BuyCreditsResponse' => __DIR__ .'/BuyCreditsResponse.php',
        'uSendit\API\BuyCreditsResult' => __DIR__ .'/BuyCreditsResult.php',
        'uSendit\API\BuyCreditsStatus' => __DIR__ .'/BuyCreditsStatus.php',
        'uSendit\API\BuyCreditsWithPromotionalCode' => __DIR__ .'/BuyCreditsWithPromotionalCode.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeResponse' => __DIR__ .'/BuyCreditsWithPromotionalCodeResponse.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeResult' => __DIR__ .'/BuyCreditsWithPromotionalCodeResult.php',
        'uSendit\API\BuyCreditsWithPromotionalCodeStatus' => __DIR__ .'/BuyCreditsWithPromotionalCodeStatus.php',
        'uSendit\API\GetSchedule' => __DIR__ .'/GetSchedule.php',
        'uSendit\API\GetScheduleResponse' => __DIR__ .'/GetScheduleResponse.php',
        'uSendit\API\GetScheduleResult' => __DIR__ .'/GetScheduleResult.php',
        'uSendit\API\GetScheduleStatus' => __DIR__ .'/GetScheduleStatus.php',
        'uSendit\API\GetPartnerEvents' => __DIR__ .'/GetPartnerEvents.php',
        'uSendit\API\GetPartnerEventsResponse' => __DIR__ .'/GetPartnerEventsResponse.php',
        'uSendit\API\GetPartnerEventsResult' => __DIR__ .'/GetPartnerEventsResult.php',
        'uSendit\API\GetPartnerEventsStatus' => __DIR__ .'/GetPartnerEventsStatus.php',
        'uSendit\API\ArrayOfPartnerEvent' => __DIR__ .'/ArrayOfPartnerEvent.php',
        'uSendit\API\PartnerEvent' => __DIR__ .'/PartnerEvent.php',
        'uSendit\API\AuthenticateUser' => __DIR__ .'/AuthenticateUser.php',
        'uSendit\API\AuthenticateUserResponse' => __DIR__ .'/AuthenticateUserResponse.php',
        'uSendit\API\AuthenticateResult' => __DIR__ .'/AuthenticateResult.php',
        'uSendit\API\AuthenticateResultStatus' => __DIR__ .'/AuthenticateResultStatus.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5c279b29d70bf9490140109060267e6e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
