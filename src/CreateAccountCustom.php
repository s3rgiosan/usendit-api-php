<?php

namespace uSendit\API;

class CreateAccountCustom
{

    /**
     * @var NewAccount $newAccount
     */
    protected $newAccount = null;

    /**
     * @var InvoiceInfo $invoiceInfo
     */
    protected $invoiceInfo = null;

    /**
     * @var string $caller
     */
    protected $caller = null;

    /**
     * @param NewAccount $newAccount
     * @param InvoiceInfo $invoiceInfo
     * @param string $caller
     */
    public function __construct($newAccount, $invoiceInfo, $caller)
    {
      $this->newAccount = $newAccount;
      $this->invoiceInfo = $invoiceInfo;
      $this->caller = $caller;
    }

    /**
     * @return NewAccount
     */
    public function getNewAccount()
    {
      return $this->newAccount;
    }

    /**
     * @param NewAccount $newAccount
     * @return \uSendit\API\CreateAccount
     */
    public function setNewAccount($newAccount)
    {
      $this->newAccount = $newAccount;
      return $this;
    }

    /**
     * @return InvoiceInfo
     */
    public function getInvoiceInfo()
    {
      return $this->invoiceInfo;
    }

    /**
     * @param InvoiceInfo $invoiceInfo
     * @return \uSendit\API\CreateAccount
     */
    public function setInvoiceInfo($invoiceInfo)
    {
      $this->invoiceInfo = $invoiceInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaller()
    {
      return $this->caller;
    }

    /**
     * @param string $caller
     * @return \uSendit\API\CreateAccount
     */
    public function setCaller($caller)
    {
      $this->caller = $caller;
      return $this;
    }

}
