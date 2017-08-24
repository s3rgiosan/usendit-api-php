<?php

namespace uSendit\API;

class GetScheduleResponse
{

    /**
     * @var GetScheduleResult $GetScheduleResult
     */
    protected $GetScheduleResult = null;

    /**
     * @param GetScheduleResult $GetScheduleResult
     */
    public function __construct($GetScheduleResult)
    {
      $this->GetScheduleResult = $GetScheduleResult;
    }

    /**
     * @return GetScheduleResult
     */
    public function getGetScheduleResult()
    {
      return $this->GetScheduleResult;
    }

    /**
     * @param GetScheduleResult $GetScheduleResult
     * @return \uSendit\API\GetScheduleResponse
     */
    public function setGetScheduleResult($GetScheduleResult)
    {
      $this->GetScheduleResult = $GetScheduleResult;
      return $this;
    }

}
