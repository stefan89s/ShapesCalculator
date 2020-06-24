<?php

class Rectangle implements Shape, AreasStrategy1 {

    //Area of Rectangle
    public function calculateArea($width, $height) {
        $area = $width * $height;
        return $area;
    }

}




