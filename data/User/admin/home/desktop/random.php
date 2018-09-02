<?php
function getRandomWord($len) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
echo getRandomWord(10)."<br>".rand(1,10000);
?>