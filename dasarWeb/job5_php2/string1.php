<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque porro veritatis iure aut quidem est hic nisi eum sapiente ipsa, mollitia sint maxime necessitatibus sed illum architecto magnam assumenda beatae.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " .strlen($loremIpsum)."<br>";
echo "Panjang kata: " .str_word_count($loremIpsum)."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>".strtolower($loremIpsum)."</p>";
?>