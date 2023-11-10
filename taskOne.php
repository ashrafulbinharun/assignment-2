<?php

echo "Task 1: Looping with Increment using a Function"."\n";

// For Loop
function evenNumberUsingForLoop( $start, $stop, $step ) {

    if ( $start % 2 != 0 ) {
        $start = $start + 1;
    }

    for ( $i = $start; $i <= $stop; $i = $i + $step ) {
        echo $i."\n";
    }

}

evenNumberUsingForLoop( 1, 20, 2 );

// While Loop
function evenNumberUsingWhileLoop( $start, $stop, $step ) {

    if ( $start % 2 != 0 ) {
        $start = $start + 1;
    }

    while ( $start <= $stop ) {
        echo $start."\n";

        $start = $start + $step;
    }

}

evenNumberUsingWhileLoop( 1, 20, 2 );

// Do While Loop
function evenNumberUsingDoWhileLoop( $start, $stop, $step ) {

    if ( $start % 2 != 0 ) {
        $start = $start + 1;
    }

    do {
        echo $start."\n";
        $start = $start + $step;

    } while ( $start <= $stop );

}

evenNumberUsingDoWhileLoop( 1, 20, 2 );

?>