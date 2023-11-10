<?php

echo "Task 4: Fibonacci Series printing using a Function"."\n";

function fibonacciSeries( $f ) {

    $initial = 0;
    $old     = 1;
    $new     = 1;

    for ( $i = 0; $i < $f; $i++ ) {

        echo $initial."\n";

        $old     = $new;
        $new     = $old + $initial;
        $initial = $old;

    }

}

fibonacciSeries( 15 );

?>