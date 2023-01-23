<?php
/*This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.*/
function accum($s) {
    $arrString=str_split($s);
    $result=[];
    foreach($arrString as $key=>$letter){
        $result[$key]=strtoupper($letter);
        for($i=0; $i<$key; $i++){
            $result[$key].=strtolower($letter);
        }
    }
    return implode('-',$result);
}