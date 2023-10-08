<?php

// http://localhost:8000/crpyText.php

// ***********first message*****************/

$cryptedMessage1 = "0@sn9sirppa@#?ia'jgtvryko1";
$length1 = strlen($cryptedMessage1) / 2;

$rest = substr($cryptedMessage1, 5, $length1);

$replace1 = str_replace('@#?', ' ', $rest);

$reverse1 = strrev ($replace1);

// ***********second message*****************/

$cryptedMessage2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$length2 = strlen($cryptedMessage2) / 2;

$rest = substr($cryptedMessage2, 5, $length2);

$replace2 = str_replace('@#?', ' ', $rest);

$reverse2 = strrev ($replace2);

// ***********third message*****************/

$cryptedMessage3 = "aopi?sgnirts@#?sedhtg+p9l!";
$length3 = strlen($cryptedMessage3) / 2;

$rest = substr($cryptedMessage3, 5, $length3);

$replace3 = str_replace('@#?', ' ', $rest);

$reverse3 = strrev ($replace3);

echo $reverse1 . ' ' . $reverse2 . ' ' . $reverse3;

?>
