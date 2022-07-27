<?php
class Square{
        public float $width;
     
      public function __construct(int $width)
        {
            $this->width = $width;
        }
        public function calculateArea(): float|int
        {
            return $this->width * $this->width;
        }
        public function calculatePerimeter(): float|int
        {
            return ($this->width + $this->width) * 2;
        }
    }
