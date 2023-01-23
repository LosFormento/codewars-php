<?php
/*Given a string of words, you need to find the highest scoring word.

Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.

For example, the score of abad is 8 (1 + 2 + 1 + 4).

You need to return the highest scoring word as a string.

If two words score the same, return the word that appears earliest in the original string.

All letters will be lowercase and all inputs will be valid.*/
function high($x)
{
    $alphabet = range('a', 'z');
    array_unshift($alphabet, null);
    unset($alphabet[0]);
    $ranked = [];
    foreach (explode(' ', $x) as $key => $word) {
        $arrWord = str_split($word);
        $sum = 0;
        foreach ($arrWord as $letter) {
            $sum += array_flip($alphabet)[$letter];
        }
        $ranked[$word] = $sum;
    }
    return array_keys($ranked, max(array_unique($ranked)))[0];
}