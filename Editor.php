<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 2:13 PM
 */

class Editor {
    protected $widgets = array();

    public function addItem($type, $position, $dimensions){
        $_widget = new $type;
        $_widget->position($position);
        $_widget->dimensions($dimensions);

        $this->widgets[] = $_widget;
    }

    public function renderCanvas(){
        $result = '----------------------------------------------------------------' . PHP_EOL;
        $result .= 'Current Drawing' . PHP_EOL;
        $result .= '----------------------------------------------------------------' . PHP_EOL;

        foreach($this->widgets as $widget){
            $result .= $widget->render() . PHP_EOL;
        }

        return $result;
    }
} 