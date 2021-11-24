<?php

$values_arr = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');

// SETUP THE DARKER COLOR

//generate 2 values
$dark_value_1 = $values_arr[rand(2, 4)].$values_arr[rand(1, 15)];
$dark_value_2 = $values_arr[rand(2, 4)].$values_arr[rand(1, 15)];
$dark_value_3 = $values_arr[rand(2, 4)].$values_arr[rand(1, 15)];

$dark_arr = array($dark_value_1, $dark_value_2, $dark_value_3);

//build hex
$dark_red = $dark_arr[rand(0, 2)];
$dark_green = $dark_arr[rand(0, 2)];
$dark_blue = $dark_arr[rand(0, 2)];

//make sure they're not all the same
while ($dark_red == $dark_green && $dark_red == $dark_blue && $dark_blue == $dark_green) {
    $dark_blue = $dark_arr[rand(0, 2)];
}

// generate color
$dark_color_1 = '#'.$dark_red.$dark_green.$dark_blue;

// work out which have the highest value for highlight color
$color_arr = array($dark_red, $dark_green, $dark_blue);
$biggest = max($color_arr);

if ($dark_red == $biggest) {
    $bigRed = 1;
} else {
    $bigRed = 0;
}

if ($dark_green == $biggest) {
    $bigGreen = 1;
} else {
    $bigGreen = 0;
}

if ($dark_blue == $biggest) {
    $bigBlue = 1;
} else {
    $bigBlue = 0;
}

//SETUP THE ACCENT COLOR

//generate 2 values

$digit_one = rand(13, 15);
$digit_two = rand(8, 10);

//which is biggest...

if (max($digit_one, $digit_two) == $digit_one) {
    $biggest = '0';
    $smallest = '1';
} else {
    $biggest = '1';
    $smallest = '0';
}

$light_value_1 = $values_arr[$digit_one].$values_arr[rand(0, 13)];
$light_value_2 = $values_arr[$digit_two].$values_arr[rand(0, 13)];

$light_arr = array($light_value_1, $light_value_2);

if ($bigRed == 1) {
    $light_red = $light_arr[$biggest];
} else {
    $light_red = $light_arr[$smallest];
}

if ($bigGreen == 1) {
    $light_green = $light_arr[$biggest];
} else {
    $light_green = $light_arr[$smallest];
}

if ($bigBlue == 1) {
    $light_blue = $light_arr[$biggest];
} else {
    $light_blue = $light_arr[$smallest];
}

$light_color_1 = '#'.$light_red.$light_green.$light_blue;


//MAKE HOT COLOR

if ($bigRed == 1) {
    $hot_red = $light_arr[$smallest];
} else {
    $hot_red = $light_arr[$biggest];
}

if ($bigGreen == 1) {
    $hot_green = $light_arr[$smallest];
} else {
    $hot_green = $light_arr[$biggest];
}

if ($bigBlue == 1) {
    $hot_blue = $light_arr[$smallest];
} else {
    $hot_blue = $light_arr[$biggest];
}

$hot_color_1 = '#'.$hot_red.$hot_green.$hot_blue;

print "Dark color: ".$dark_color_1."<br>";
print "Light color: ".$light_color_1."<br>";
print "Hot color: ".$hot_color_1."<br>";

?>
