<?php

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

$editor = new Editor();
$history = new History();

// 保存 a
$editor->setContent('a');
$history->push($editor->createState());
// 保存 b
$editor->setContent('b');
$history->push($editor->createState());
// 保存 c
$editor->setContent('c');
$editor->restore($history->pop());// 回撤
$editor->restore($history->pop());// 回撤

echo $editor->getContent();// 输出 a