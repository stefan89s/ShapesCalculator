<?php

class Cylinder implements Shape, AreasStrategy1, VolumeStrategy1 {

    //Area of Cylinder
    public function calculateArea($pi, $radius) {
        $area = $pi * pow($radius, 2);
        return $area;
    }

    //Volume of Cylinder
    public function calculateVolume($radius, $lenght) {
        $area = 3.14 * pow($radius, 2) ;  
        $volume = $area * $lenght;
        return $volume;
        
    }

}



