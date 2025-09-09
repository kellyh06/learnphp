<?php
 
class Box {
    public $width;
    protected $height;
    private $length;



    public function __construct($w, $h, $l) {
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function getWidth() {
        return $this->width;
    }
    public function getWidth($width) {
        if ($width > 0 && is_numeric($width)) {
            $this->width = $width;
        }
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = "Metal";
    public $massPerUnit = 2;

    public function changeWidth() {
        $this->width = 333;
    }

    public function mass() {
        return $this->volume() * $this ->massPerUnit;
    }
}

$metalBox = new MetalBox(2, 3, 4,);
$metalBox->width = 'Cool value'


var_dump($metalBox);
var_dump($metalBox->volume());