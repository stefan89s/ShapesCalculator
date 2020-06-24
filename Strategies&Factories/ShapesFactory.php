<?php

class ShapesFactory {

    public function getShape(Shape $shape) {
        return new $shape;
    }

}




