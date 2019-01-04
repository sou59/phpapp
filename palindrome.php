<?php

function isPalindrome(string $word) {

    $size = strlen($word);

    if ($size === 0 || $size === 1) {
        return true;
    }

    if(substr($word, 0, 1) !== substr($word, $size-1, 1)) {
        return false;
    }

    return isPalindrome(substr($word, 1, $size-2));
}

foreach (['radar', 'bob', 'h', '', 'toto'] as $word) {
    echo $word . ' ';
    var_dump(isPalindrome($word));
    echo '<br>';
}


