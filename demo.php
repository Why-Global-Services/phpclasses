<?php

$name = "WHYGLOBALSERVICES";

echo($name)."<br/>";

$newary = ["test", "1", "2", 3];

print_r($newary)."<br/>";
$newary[2]="4";
print_r($newary)."<br/>";

$maxarray = [1,4,3,6,8];

print_r(max($maxarray));

array_push($maxarray, 100);

print_r(($maxarray));

is_integer("test");



