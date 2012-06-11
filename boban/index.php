<?php

/**
 * @author Nebojsa Jakovljevic
 * @copyright 2010
 */
 
    

    $filename= "../counter.txt" ;
    $fd = fopen ($filename , "r") or die ("Can't open $filename") ;
    $fstring = fread ($fd , filesize ($filename)) ;
    echo '<h2>Broj poseta: '.$fstring.'</h2>' ;
    fclose($fd) ;

?>
