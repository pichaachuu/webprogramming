<?php

$myArray = array();

if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisikan atau kosong.";
} else {
    echo "Variabel terdefinisikan dan tidak kosong.";
}