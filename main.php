<?php
$badWord = $_GET["badword"];
$str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores asperiores at quos voluptatum incidunt error temporibus eum quae. Quo omnis sit numquam, temporibus hic dolores vel cum maiores officia molestias.";
$str = str_replace($badWord, "***", strtolower($str));

