<?php

require_once 'EditorState.php';

class History
{
    /**
     * @var array
     */
    private $states = [];

    /**
     * 保存状态到状态集
     *
     * @param EditorState $state
     */
    public function push(EditorState $state): void
    {
        array_push($this->states, $state);
    }

    /**
     * 获取前一个状态
     *
     * @return EditorState
     */
    public function pop(): EditorState
    {
        return array_pop($this->states);
    }
}