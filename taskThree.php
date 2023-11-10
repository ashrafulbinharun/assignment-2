<?php

echo "Task 3: Break on Condition"."\n";

function fibonacci( $fi ) {
    if ( $fi <= 0 ) {
        return 0;
    } elseif ( $fi == 1 ) {
        return 1;
    } else {
        return ( fibonacci( $fi - 1 ) + fibonacci( $fi - 2 ) );
    }

}

$stop  = 10;
$count = 0;

for ( $i = 2; $count < $stop; $i++ ) {
    $f = fibonacci( $i );

    if ( $f > 100 ) {
        break;
    }

    echo $f." ";
    $count++;
}

?>