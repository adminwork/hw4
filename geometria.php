<?php
    function rectangle($a , $b){
        $s = $a * $b;
        return $s;
    }

    echo 'Area of a rectangle:'. rectangle(5,7);
    echo "<br>";


    function roundd($r){
        $s = pi() *$r *$r;
        return round($s, 2);
    }
    echo 'Area of a circle:'.roundd(7);
    echo "<br>";

    function triangle($a , $h){
        $s = 1/2 *$a * $h;
        return $s;
    }
    echo 'Area of a rectangle ver1:'.triangle(4, 6);
    echo "<br>";

    function triangle1($a , $b, $alfa){
        $s = 1/2 *$a * $b * round(sin($alfa));
        return $s;
    }
    echo 'Area of a rectangle ver2:'.triangle1(4, 2, 90);
    echo "<br>";

    function triangle2($a , $b, $c){
        $p = 1/2*($a + $b + $c);
        $s = sqrt($p*($p - $a)*($p - $b)*($p - $c));
        return round($s, 2);
    }
    echo 'Area of a rectangle ver3:'. triangle2(4, 2, 5);
    echo "<br>";

    function trapez($a , $b, $h){
    $s = 1/2 *($a + $b)* $h;
    return $s;
    }
    echo 'Area of the trapezoid:'.trapez(3, 5, 4);
    echo "<br>";

    function parallelogram($a , $h){
        $s = $a * $h;
        return $s;
    }
    echo 'Area of the parallelogram:'.parallelogram(3, 5);
    echo "<br>";

    function romb($d1 , $d2){
        $s = 1/2 * $d1 * $d2;
        return $s;
    }
    echo 'Area of the romb:'.romb(3, 5);
    echo "<br>";