<?php

require_once 'BrowseHistory.php';

$browseHistory = new BrowseHistory();
$browseHistory->push('a');
$browseHistory->push('b');
$browseHistory->push('c');
$iterator = $browseHistory->createIterator();
while ($iterator->hasNext()) {
    $url = $iterator->current();
    echo "{$url}\n";
    $iterator->next();
}