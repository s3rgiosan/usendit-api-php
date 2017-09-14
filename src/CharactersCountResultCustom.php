<?php

namespace uSendit\API;

class CharactersCountResultCustom
{

    /**
     * @var CharactersCountStatus $CharactersCountStatus
     */
    protected $CharactersCountStatus = null;

    /**
     * @var string $CharactersCountMessage
     */
    protected $CharactersCountMessage = null;

    /**
     * @var int $CharactersNumber
     */
    protected $CharactersNumber = null;

    /**
     * @var int $CharactersTotalNumber
     */
    protected $CharactersTotalNumber = null;

    /**
     * @var MsgEncoding $Encoding
     */
    protected $Encoding = null;

    /**
     * @var int $SegmentsNumber
     */
    protected $SegmentsNumber = null;

    /**
     * @param CharactersCountStatus $CharactersCountStatus
     * @param int $CharactersNumber
     * @param int $CharactersTotalNumber
     * @param MsgEncoding $Encoding
     * @param int $SegmentsNumber
     */
    public function __construct($CharactersCountStatus, $CharactersNumber, $CharactersTotalNumber, $Encoding, $SegmentsNumber)
    {
      $this->CharactersCountStatus = $CharactersCountStatus;
      $this->CharactersNumber = $CharactersNumber;
      $this->CharactersTotalNumber = $CharactersTotalNumber;
      $this->Encoding = $Encoding;
      $this->SegmentsNumber = $SegmentsNumber;
    }

    /**
     * @return CharactersCountStatus
     */
    public function getCharactersCountStatus()
    {
      return $this->CharactersCountStatus;
    }

    /**
     * @param CharactersCountStatus $CharactersCountStatus
     * @return \uSendit\API\CharactersCountResult
     */
    public function setCharactersCountStatus($CharactersCountStatus)
    {
      $this->CharactersCountStatus = $CharactersCountStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharactersCountMessage()
    {
      return $this->CharactersCountMessage;
    }

    /**
     * @param string $CharactersCountMessage
     * @return \uSendit\API\CharactersCountResult
     */
    public function setCharactersCountMessage($CharactersCountMessage)
    {
      $this->CharactersCountMessage = $CharactersCountMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharactersNumber()
    {
      return $this->CharactersNumber;
    }

    /**
     * @param int $CharactersNumber
     * @return \uSendit\API\CharactersCountResult
     */
    public function setCharactersNumber($CharactersNumber)
    {
      $this->CharactersNumber = $CharactersNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharactersTotalNumber()
    {
      return $this->CharactersTotalNumber;
    }

    /**
     * @param int $CharactersTotalNumber
     * @return \uSendit\API\CharactersCountResult
     */
    public function setCharactersTotalNumber($CharactersTotalNumber)
    {
      $this->CharactersTotalNumber = $CharactersTotalNumber;
      return $this;
    }

    /**
     * @return MsgEncoding
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param MsgEncoding $Encoding
     * @return \uSendit\API\CharactersCountResult
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentsNumber()
    {
      return $this->SegmentsNumber;
    }

    /**
     * @param int $SegmentsNumber
     * @return \uSendit\API\CharactersCountResult
     */
    public function setSegmentsNumber($SegmentsNumber)
    {
      $this->SegmentsNumber = $SegmentsNumber;
      return $this;
    }

}
