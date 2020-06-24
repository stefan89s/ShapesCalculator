<?php

class PerformStrategy {

    //Performing the area for selected shape
    public function performArea(Shape $shape, $number1, $number2) {
        //Instantiating the factory for a new shape 
        $shapesFactory = new ShapesFactory();

        //Returning the object of selected shape
        $newShape = $shapesFactory->getShape($shape);

        //Performing the strategy for calculating area of a shape
        return $newShape->calculateArea($number1, $number2);

    }

    //Performing the volume for selected shape
    public function performVolume(Shape $shape, $value1, $value2) {
        //Instantiating the factory for a new shape
        $shapesFactory = new ShapesFactory();

        //Returning the object of selected shape
        $newShape = $shapesFactory->getShape($shape);

        //Performing the strategy for calculating volume of a shape
        return $newShape->calculateVolume($value1, $value2);
    }

}


