<?php

namespace uSendit\API;

class ArrayOfPackCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Pack[] $Pack
     */
    protected $Pack = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Pack[]
     */
    public function getPack()
    {
      return $this->Pack;
    }

    /**
     * @param Pack[] $Pack
     * @return \uSendit\API\ArrayOfPack
     */
    public function setPack(array $Pack = null)
    {
      $this->Pack = $Pack;
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
      return isset($this->Pack[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Pack
     */
    public function offsetGet($offset)
    {
      return $this->Pack[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Pack $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Pack[] = $value;
      } else {
        $this->Pack[$offset] = $value;
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
      unset($this->Pack[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Pack Return the current element
     */
    public function current()
    {
      return current($this->Pack);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Pack);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Pack);
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
      reset($this->Pack);
    }

    /**
     * Countable implementation
     *
     * @return Pack Return count of elements
     */
    public function count()
    {
      return count($this->Pack);
    }

}
