<?php
    // $date = new DateTime('2019-01-01');
    // echo $date->format('N');
    include_once('classes.php');
    // $point = new Point(200, 300);
    // $point->show();
    // echo '<pre>';
    // echo'<h1>';
    // var_dump($point);
    // echo '</h1>';
    // echo '</pre>';
    $rectangle = new RectangleAbs(100, 200, 200, 150);
    $rectangle->Area();
    $rectangle->Perimeter();
    $circle = new CircleAbs(100,200, 50);
    $circle->Area();
    $circle->Perimeter();
    $arr = [];
    $arr[] = new RectangleAbs(1,1,200,150);
    $arr[] = new CircleAbs(1,1,50);
    foreach($arr as $a)
    {
        $a->Perimeter();
        $a->Area();
    }
?>
