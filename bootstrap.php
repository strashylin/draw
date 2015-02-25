<?php

require_once('Editor.php');
require_once('Widget.php');
require_once('Rectangle.php');
require_once('Square.php');
require_once('Ellipse.php');
require_once('Circle.php');
require_once('Textbox.php');


$widgets = [
    [
        'type' => 'Rectangle',
        'position' => [10,10],
        'dimensions' => [30,40],
    ],
    [
        'type' => 'Square',
        'position' => [15,30],
        'dimensions' => [35],
    ],
    [
        'type' => 'Ellipse',
        'position' => [100,150],
        'dimensions' => [300,200],
    ],
    [
        'type' => 'Circle',
        'position' => [1,1],
        'dimensions' => [300],
    ],
    [
        'type' => 'Textbox',
        'position' => [5,5],
        'dimensions' => [200,100, "sample text"],
    ],


];
