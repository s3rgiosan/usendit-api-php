<?php

namespace uSendit\API;

class BuyCreditsWithPromotionalCodeStatus
{
    const __default = 'SUCCESS';
    const SUCCESS = 'SUCCESS';
    const USER_UNKNOWN = 'USER_UNKNOWN';
    const PENDING_SMS_CONFIRMATION_CODE = 'PENDING_SMS_CONFIRMATION_CODE';
    const INVALID_PACK_ID = 'INVALID_PACK_ID';
    const ERROR_GENERATING_PAYMENT_REFERENCE = 'ERROR_GENERATING_PAYMENT_REFERENCE';
    const CALLER_UNKNOWN = 'CALLER_UNKNOWN';
    const MISSING_INVOICE_INFO = 'MISSING_INVOICE_INFO';
    const PROMOTIONAL_CAMPAIGN_NOT_EXISTS = 'PROMOTIONAL_CAMPAIGN_NOT_EXISTS';
    const PROMOTIONAL_CAMPAIGN_NOT_ACTIVE = 'PROMOTIONAL_CAMPAIGN_NOT_ACTIVE';
    const PROMOTIONAL_CAMPAIGN_EXCEEDED_MAX_CODE_REDEMPTION = 'PROMOTIONAL_CAMPAIGN_EXCEEDED_MAX_CODE_REDEMPTION';
    const PROMOTIONAL_CAMPAIGN_INVALID_PACK = 'PROMOTIONAL_CAMPAIGN_INVALID_PACK';
    const GENERIC_ERROR = 'GENERIC_ERROR';


}