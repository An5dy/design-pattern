<?php

require_once 'Tool.php';

class SelectionTool implements Tool
{
    public function mouseDown()
    {
        echo "Selection icon\n";
    }

    public function mouseUp()
    {
        echo "Draw a dashed rectangle\n";
    }
}