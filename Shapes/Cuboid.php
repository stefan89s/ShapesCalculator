<?php

class Cuboid implements Shape, AreasStrategy1, VolumeStrategy1 {

    //Area of Cuboid
    public function calculateArea($lenght, $width) {
        $area = $lenght * $width;
        return $area;
    }

    //Volume of Cuboid
    public function calculateVolume($value1, $value2) {
        $volume = $value1 * $value2;
        return $volume;
    }

}






