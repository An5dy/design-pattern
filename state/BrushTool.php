<?php

require_once 'Tool.php';

class BrushTool implements Tool
{
    public function mouseDown()
    {
        echo "Brush icon\n";
    }

    public function mouseUp()
    {
        echo "Draw a line\n";
    }
}