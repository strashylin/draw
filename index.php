<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 2:20 PM
 */

require_once('bootstrap.php');

$editor = new Editor();

foreach ($widgets as $widget){
    $editor->addItem($widget['type'], $widget['position'], $widget['dimensions']);
}

echo $editor->renderCanvas();