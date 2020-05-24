<?php

require_once 'BrowseHistory.php';
require_once 'IteratorInterface.php';

class ListIterator implements IteratorInterface
{
    /**
     * @var BrowseHistory
     */
    private $history;

    /**
     * @var int
     */
    private $index = 0;

    public function __construct(BrowseHistory $history)
    {
        $this->history = $history;
    }

    /**
     * 是否有下一个元素
     *
     * @return bool
     */
    public function hasNext(): bool
    {
        return $this->index < count($this->history->urls);
    }

    /**
     * 获取当前元素
     *
     * @return string
     */
    public function current(): string
    {
        return $this->history->urls[$this->index];
    }

    /**
     * 获取下一个元素
     */
    public function next(): void
    {
        $this->index++;
    }
}