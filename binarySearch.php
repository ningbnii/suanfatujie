<?php
/**
 * 二分查找
 * @author 296720094@qq.com
 * @date      2017-02-26
 * @copyright http://wxbuluo.com
 * @param     [type]             $list [description]
 * @param     [type]             $item [description]
 * @return    [type]                   [description]
 */
function binary_search($list, $item)
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = ceil(($low + $high) / 2);
        $guess = $list[$mid];
        if ($guess == $item) {
            return $mid;
        } elseif ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return false;
}

$myList = [1, 3, 5, 7, 9];
echo binary_search($myList, 5);