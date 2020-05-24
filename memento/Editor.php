<?php

require_once 'EditorState.php';

class Editor
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
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * 创建状态管理类
     *
     * @return EditorState
     */
    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    /**
     * 重新设置 content
     *
     * @param EditorState $state
     */
    public function restore(EditorState $state)
    {
        $this->content = $state->getContent();
    }
}