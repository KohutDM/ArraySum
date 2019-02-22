<?php

$users_array=array(1,2,3,4,5,6,7,8,9,10);
$users_array_count=count($users_array);
$users_sum=5;
$result_array=[];


foreach ($users_array as $single_array_part)
{
    for ($key=0;$key<=$users_array_count;$key++)
    {
        if ($single_array_part+$users_array[$key]=$users_sum)
        {
            array_push($result_array, "$single_array_part+$users_array[$key]=$users_sum");
        }
    }
}
$result=array_unique($result_array);
foreach ($result as $res)
{
    echo $res."</br>";
}
