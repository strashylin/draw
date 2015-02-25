<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 2:36 PM
 */

class Circle  extends Widget {
    protected
        $diameter = 0;

    public function dimensions($dimensions = null){
        if (isset($dimensions[0])){
            $this->diameter = $dimensions[0];
        }
        return array($this->diameter);
    }

    public function render(){
        return "circle ({$this->x}, {$this->y}) size={$this->diameter}";
    }
} 