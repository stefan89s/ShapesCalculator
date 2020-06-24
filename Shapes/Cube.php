<?php

class Cube implements Shape, AreasStrategy1, VolumeStrategy1 {

    //Area of a Cube
    public function calculateArea($side1, $side2) {
        $area = pow($side1, 2);
        return $area;
    }

    //Volume of a Cube
    public function calculateVolume($side1, $side2) {
        $volume = pow($side1, 3);
        return $volume;
    }

}



