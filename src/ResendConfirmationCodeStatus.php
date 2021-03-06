<?php

namespace uSendit\API;

class ResendConfirmationCodeStatus
{
    const __default = 'SUCCESS';
    const SUCCESS = 'SUCCESS';
    const USER_UNKNOWN = 'USER_UNKNOWN';
    const NO_MORE_RETRIES_ALLOWED = 'NO_MORE_RETRIES_ALLOWED';
    const ERROR_RESENDING_SMS_CONFIRMATION = 'ERROR_RESENDING_SMS_CONFIRMATION';
    const ACCOUNT_ALREADY_CONFIRMED = 'ACCOUNT_ALREADY_CONFIRMED';
    const GENERIC_ERROR = 'GENERIC_ERROR';


}
