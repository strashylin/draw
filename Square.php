<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 1:44 PM
 */

class Square extends Widget {

    protected
        $width = 0;

    public function dimensions($dimensions = null){
        if (isset($dimensions[0])){
            $this->width = $dimensions[0];
        }
        return array($this->width);
    }

    public function render(){
        return "square ({$this->x}, {$this->y}) size={$this->width}";
    }


} 