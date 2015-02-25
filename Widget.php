<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 2/20/15
 * Time: 1:37 PM
 */


class Widget {

    protected
        $x = 0,
        $y = 0;

    public function position($position){
        if (isset($position[0]) && isset($position[1])){
            $this->x = $position[0];
            $this->y = $position[1];
        }
        return [$this->x, $this->y];
    }

} 