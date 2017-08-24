<?php

namespace uSendit\API;

class SmsCharCounterResponseCustom
{

    /**
     * @var CharactersCountResult $SmsCharCounterResult
     */
    protected $SmsCharCounterResult = null;

    /**
     * @param CharactersCountResult $SmsCharCounterResult
     */
    public function __construct($SmsCharCounterResult)
    {
      $this->SmsCharCounterResult = $SmsCharCounterResult;
    }

    /**
     * @return CharactersCountResult
     */
    public function getSmsCharCounterResult()
    {
      return $this->SmsCharCounterResult;
    }

    /**
     * @param CharactersCountResult $SmsCharCounterResult
     * @return \uSendit\API\SmsCharCounterResponse
     */
    public function setSmsCharCounterResult($SmsCharCounterResult)
    {
      $this->SmsCharCounterResult = $SmsCharCounterResult;
      return $this;
    }

}
