<?php

require_once 'ListIterator.php';

class BrowseHistory
{
    /**
     * @var array
     */
    public $urls = [];

    /**
     * 保存 url
     *
     * @param string $url
     */
    public function push(string $url): void
    {
        array_push($this->urls, $url);
    }

    public function pop(): string
    {
        return array_pop($this->urls);
    }

    public function createIterator()
    {
        return new ListIterator($this);
    }
}