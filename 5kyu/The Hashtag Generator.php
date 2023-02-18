<?php
/*Here's the deal:

It must start with a hashtag (#).
All words must have their first letter capitalized.
If the final result is longer than 140 chars it must return false.
If the input or the result is an empty string it must return false.
Examples
" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false*/

function generateHashtag($str) {
    $res = preg_replace('/\s+/', ' ', trim($str));
    if(strlen($res) > 1){
        $hashTag='#';
        foreach(explode(' ',$res) as $word){
            $hashTag.=ucfirst($word);
        }
        if(strlen($hashTag) > 140){
            return false;
        }
        return $hashTag;
    }else{
        return false;
    }
}