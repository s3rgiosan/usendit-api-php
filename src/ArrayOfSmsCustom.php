<?php

namespace uSendit\API;

class ArrayOfSmsCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Sms[] $Sms
     */
    protected $Sms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Sms[]
     */
    public function getSms()
    {
      return $this->Sms;
    }

    /**
     * @param Sms[] $Sms
     * @return \uSendit\API\ArrayOfSms
     */
    public function setSms(array $Sms = null)
    {
      $this->Sms = $Sms;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Sms[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Sms
     */
    public function offsetGet($offset)
    {
      return $this->Sms[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Sms $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Sms[] = $value;
      } else {
        $this->Sms[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Sms[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Sms Return the current element
     */
    public function current()
    {
      return current($this->Sms);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Sms);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Sms);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Sms);
    }

    /**
     * Countable implementation
     *
     * @return Sms Return count of elements
     */
    public function count()
    {
      return count($this->Sms);
    }

}
