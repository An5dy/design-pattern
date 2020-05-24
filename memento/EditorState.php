<?php

class EditorState
{
    /**
     * @var string
     */
    private $content = '';

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * 初始化状态
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }
}