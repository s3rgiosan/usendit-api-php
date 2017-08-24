<?php

namespace uSendit\API;

class ScheduleMessageStatus
{
    const __default = 'SCHEDULED';
    const SCHEDULED = 'SCHEDULED';
    const MSISDN_EMPTY = 'MSISDN_EMPTY';
    const MSISDN_EXCEEDS_MAX_LENGTH = 'MSISDN_EXCEEDS_MAX_LENGTH';
    const MSISDN_INVALID = 'MSISDN_INVALID';
    const MSISDN_MOBILE_OPERATOR_UNKNOWN = 'MSISDN_MOBILE_OPERATOR_UNKNOWN';
    const MSISDN_INVALID_ROUTE = 'MSISDN_INVALID_ROUTE';
    const MESSAGE_TEXT_EMPTY = 'MESSAGE_TEXT_EMPTY';
    const MESSAGE_TEXT_EXCEEDS_MAX_LENGTH = 'MESSAGE_TEXT_EXCEEDS_MAX_LENGTH';
    const SENDER_EXCEEDS_MAX_LENGTH = 'SENDER_EXCEEDS_MAX_LENGTH';
    const SENDER_NOT_ALLOWED = 'SENDER_NOT_ALLOWED';
    const PRIORITY_INVALID = 'PRIORITY_INVALID';
    const EXPIRATION_DATETIME_INVALID = 'EXPIRATION_DATETIME_INVALID';


}
