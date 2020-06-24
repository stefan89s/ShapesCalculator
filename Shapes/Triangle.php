<?php

class Triangle implements Shape, AreasStrategy1 {

    //Area of Triangle
    public function calculateArea($base, $hight) {
        $area = 1/2 * ($base * $hight);
        return $area;
    }

}






