<?php

function intSequence($u, $j){
    if ($u>$j){
        echo"first $u last $j ";
    }else{
        echo"first $j last $u ";
    }
}

intSequence(5,7);
intSequence(8,2);
