<?php

require_once 'Tool.php';

class Canvas
{
    /**
     * @var Tool
     */
    private $currentTool;

    /**
     * 访问当前工具
     *
     * @return Tool
     */
    public function getCurrentTool()
    {
        return $this->currentTool;
    }

    /**
     * 设置工具
     *
     * @param Tool $currentTool
     */
    public function setCurrentTool(Tool $currentTool): void
    {
        $this->currentTool = $currentTool;
    }

    public function mouseDown()
    {
        $this->currentTool->mouseDown();
    }

    public function mouseUp()
    {
        $this->currentTool->mouseUp();
    }
}