<?php

namespace uSendit\API;

class ArrayOfPartnerEventCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PartnerEvent[] $PartnerEvent
     */
    protected $PartnerEvent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PartnerEvent[]
     */
    public function getPartnerEvent()
    {
      return $this->PartnerEvent;
    }

    /**
     * @param PartnerEvent[] $PartnerEvent
     * @return \uSendit\API\ArrayOfPartnerEvent
     */
    public function setPartnerEvent(array $PartnerEvent = null)
    {
      $this->PartnerEvent = $PartnerEvent;
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
      return isset($this->PartnerEvent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PartnerEvent
     */
    public function offsetGet($offset)
    {
      return $this->PartnerEvent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PartnerEvent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PartnerEvent[] = $value;
      } else {
        $this->PartnerEvent[$offset] = $value;
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
      unset($this->PartnerEvent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PartnerEvent Return the current element
     */
    public function current()
    {
      return current($this->PartnerEvent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PartnerEvent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PartnerEvent);
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
      reset($this->PartnerEvent);
    }

    /**
     * Countable implementation
     *
     * @return PartnerEvent Return count of elements
     */
    public function count()
    {
      return count($this->PartnerEvent);
    }

}
