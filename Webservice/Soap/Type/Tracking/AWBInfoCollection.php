<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * AWBInfoCollection class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class AWBInfoCollection implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AWBInfo[]
     */
    protected $ArrayOfAWBInfoItem = [];

    /**
     * @param AWBInfo[] $ArrayOfAWBInfoItem
     */
    public function __construct(array $ArrayOfAWBInfoItem)
    {
        $this->ArrayOfAWBInfoItem = $ArrayOfAWBInfoItem;
    }

    /**
     * @return AWBInfo[]
     */
    public function getArrayOfAWBInfoItem(): array
    {
        return $this->ArrayOfAWBInfoItem;
    }

    /**
     * @param AWBInfo[] $ArrayOfAWBInfoItem
     * @return self
     */
    public function setArrayOfAWBInfoItem(array $ArrayOfAWBInfoItem): self
    {
        $this->ArrayOfAWBInfoItem = $ArrayOfAWBInfoItem;

        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
        return isset($this->ArrayOfAWBInfoItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AWBInfo
     */
    public function offsetGet($offset): AWBInfo
    {
        return $this->ArrayOfAWBInfoItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AWBInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->ArrayOfAWBInfoItem[] = $value;
        } else {
            $this->ArrayOfAWBInfoItem[$offset] = $value;
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
        unset($this->ArrayOfAWBInfoItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AWBInfo Return the current element
     */
    public function current(): AWBInfo
    {
        return current($this->ArrayOfAWBInfoItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfAWBInfoItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfAWBInfoItem);
    }

    /**
     * Iterator implementation
     *
     * @return bool Return the validity of the current position
     */
    public function valid(): bool
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
        reset($this->ArrayOfAWBInfoItem);
    }

    /**
     * Countable implementation
     *
     * @return AWBInfo Return count of elements
     */
    public function count(): AWBInfo
    {
        return count($this->ArrayOfAWBInfoItem);
    }
}
