<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 1:44 PM
 */

class Textbox extends Widget {

    protected
        $width = 0,
        $height = 0,
        $text = 0;


    public function dimensions($dimensions){
        if (isset($dimensions[0]) && isset($dimensions[1])){
            $this->width = $dimensions[0];
            $this->height = $dimensions[1];
            $this->text = $dimensions[2];
        }
        return array($this->width, $this->height);
    }

    public function render(){
        return "Textbox ({$this->x}, {$this->y}) width={$this->width} height={$this->height}, Text=$this->text";
    }


} 