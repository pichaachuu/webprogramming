<?php

$loremIpsum = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore corporis, officiis soluta explicabo quidem aut esse, nam laborum quis velit quasi. Aperiam ratione, quae voluptatem quod distinctio perspiciatis? Rerum, vel.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " .strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";