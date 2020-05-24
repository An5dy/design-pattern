<?php

require_once 'Canvas.php';
require_once 'SelectionTool.php';
require_once 'BrushTool.php';

$canvas = new Canvas();
// 设置 SelectionTool
echo '--------------------- 设置 SelectionTool ---------------------' . "\n";
$canvas->setCurrentTool(new SelectionTool());
$canvas->mouseDown();
$canvas->mouseUp();
// 设置 BrushTool
echo '--------------------- 设置 BrushTool ---------------------' . "\n";
$canvas->setCurrentTool(new BrushTool());
$canvas->mouseDown();
$canvas->mouseUp();