<?php

require_once 'Editor.php';
require_once 'History.php';

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