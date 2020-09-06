<?php
// Your code here!
$numbers = [1, 2, 3, 4, 5];
function array_search2($keyword, $array)
{
    $index = 0;
    foreach ($array as $arr) {
        if ($arr == $keyword) {
            #returnは関数の外に値を返す。
            #returnを実行した時点で関数を抜ける
            return $index;
        }
        $index += 1;
    }
    #foreachの時点で関数を抜けていなければ
    #一致するものがなかったということなのでfalseを返す
    return "false";
}
$result = array_search2(10, $numbers);
echo $result;



// Your code here!
$numbers = [1, 2, 3, 4, 5];
function array_search3($keyword, $array)
{
    $index = 0;
    foreach ($array as $arr) {
        if ($arr == $keyword) {
            #returnは関数の外に値を返す。
            #returnを実行した時点で関数を抜ける
            return $index;
        }
        $index += 1;
    }
    #foreachの時点で関数を抜けていなければ
    #一致するものがなかったということなのでfalseを返す
    return "false";
}
$result = array_search2(10, $numbers);
echo $result;
