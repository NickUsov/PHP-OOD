<?php 
    // class Point
    // {
    //     public $x;
    //     public $y;
    //     public function show() {
    //         echo "Variable x = $this->x, y = $this->y";
    //     }
    //     public function __construct($x, $y)
    //     {
    //         $this->x = $x;
    //         $this->y = $y;
    //     }
    // }
    // class PointExt
    // {
    //     protected $x;
    //     protected $y;
    //     public function __construct($x, $y)
    //     {
    //         $this->x = $x;
    //         $this->y = $y;
    //     }
    //     public function show() {
    //         echo "Variable x = $this->x, y = $this->y";
    //     }
    // }
    // class Rectangle extends PointExt
    // {
    //     protected $width;
    //     protected $height;
    //     public function __construct($x, $y, $width, $height)
    //     {
    //         parent:: __construct($x, $y);
    //         $this->width = $width;
    //         $this->height = $height;
    //     }
    //     public function show() {
    //         parent::show();
    //         echo ", width = $this->width, height = $this->height";
    //     }
    // }
    abstract class PointAbs
    {
        protected $x;
        protected $y;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function show() {
            echo "Variable x = $this->x, y = $this->y";
        }
        abstract function Area();
        abstract function Perimeter();
    }

    class RectangleAbs extends PointAbs
    {
        protected $width;
        protected $height;
        public function __construct($x, $y, $width, $height)
        {
            parent::__construct($x, $y);
            $this->width = $width;
            $this->height = $height;
        }
        function Area()
        {
            echo "Area = ".$this->width*$this->height.'<br/>';
        }
        function Perimeter()
        {
            echo "Perimeter =".(2*$this->width + 2*$this->height).'<br/>';
        }
    }

    class CircleAbs extends PointAbs
    {
        const Pi = M_PI;
        
        protected $radius;
        public function __construct($x, $y, $radius)
        {
            parent::__construct($x, $y);
            $this->radius = $radius;
        }
        function Area()
        {
            echo "Area = ".$this->radius*$this->radius*self::Pi.'<br/>';
        }
        function Perimeter()
        {
            echo "Perimeter =".(2*$this->radius*self::Pi).'<br/>';
        }
    }

    interface Geometry
    {
        const Pi = M_PI;
        function Area();
        function Perimeter();
    }
    class CircleInter implements Geometry
    {
        function Area()
        {

        }
        function Perimeter()
        {

        }
    }
    class RectangleInter implements Geometry
    {
        function Area()
        {

        }
        function Perimeter()
        {
            
        }
    }
?>