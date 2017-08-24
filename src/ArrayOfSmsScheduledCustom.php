<?php

namespace uSendit\API;

class ArrayOfSmsScheduledCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SmsScheduled[] $SmsScheduled
     */
    protected $SmsScheduled = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SmsScheduled[]
     */
    public function getSmsScheduled()
    {
      return $this->SmsScheduled;
    }

    /**
     * @param SmsScheduled[] $SmsScheduled
     * @return \uSendit\API\ArrayOfSmsScheduled
     */
    public function setSmsScheduled(array $SmsScheduled = null)
    {
      $this->SmsScheduled = $SmsScheduled;
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
      return isset($this->SmsScheduled[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SmsScheduled
     */
    public function offsetGet($offset)
    {
      return $this->SmsScheduled[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SmsScheduled $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SmsScheduled[] = $value;
      } else {
        $this->SmsScheduled[$offset] = $value;
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
      unset($this->SmsScheduled[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SmsScheduled Return the current element
     */
    public function current()
    {
      return current($this->SmsScheduled);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SmsScheduled);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SmsScheduled);
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
      reset($this->SmsScheduled);
    }

    /**
     * Countable implementation
     *
     * @return SmsScheduled Return count of elements
     */
    public function count()
    {
      return count($this->SmsScheduled);
    }

}
