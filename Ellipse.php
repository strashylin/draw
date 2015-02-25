<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 2:34 PM
 */

class Ellipse  extends Widget {

    protected
        $hor = 0,
        $vert = 0;

    public function dimensions($dimensions){
        if (isset($dimensions[0]) && isset($dimensions[1])){
            $this->hor = $dimensions[0];
            $this->vert = $dimensions[1];
        }
        return array($this->hor, $this->vert);
    }

    public function render(){
        return "ellipse ({$this->x}, {$this->y})  horizontal diameter={$this->hor} vertical diameter={$this->vert}";
    }
} 